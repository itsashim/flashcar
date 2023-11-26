<?php

namespace App\Http\Controllers\API;


use App\Model\Bikebrand;
use App\Model\Bike;
use App\Model\Adds;
use App\Model\Feature;
use App\Category;
use App\SubCategory;
use App\Model\Setting;
use App\Model\BikeSell;
use App\Model\Bikemodel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BikeController extends Controller
{
    public function bikebrandlist(Request $request,$id)
    {

        $brand = Bikebrand::find($id);
        $categories = Category::with('subCategory')->get();
        $subCategory = SubCategory::with('product')->where('category_id',11)->limit(6)->get();

        $bikemodels = $brand->bikemodels;

        return response(['status'=>true,'brand'=>$brand,'bikemodels'=>$bikemodels,'categories'=>$categories,'subCategory'=>$subCategory]);
        
    }

    public function brandlist(Request $request)
    {

        // $brandlist = Bikebrand::all();
        $setting = Setting::find(1);
        $brands = Bikebrand::all();
        $categories = Category::with('subCategory')->get();

        return response(['status'=>true,'brands'=>$brands,'setting'=>$setting,'categories'=>$categories]);
        
    }

    public function store(Request $request)
    {
        
        $bike = new Bike;
        $bike->bikebrand_id = $request->bikebrand_id;
        $bike->user_id = $request->user_id;
        $bike->bikemodel_id = $request->bikemodel_id;
        $bike->color = $request->color;
        $bike->register_no = $request->register_no;

        if($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/bike', $fileName, 'public');
            $imagePath =  '/storage/uploads/bike/' . $fileName;
        } else {
            $imagePath = '';
        }
        $bike->logo_path = $imagePath;
        $bike->save();

        $bikesell = new BikeSell;
        $bikesell->bike_id = $bike->id;
        $bikesell->bike_no = $request->bike_no;
        $bikesell->user_id = $request->user_id;
        $bikesell->bike_for = 'Maintainance';
        $bikesell->save();
        return response([ 'status'=>true,'message'=>'Bike Added Enter Successfully.','data'=>$bikesell]);

    }

    public function edit(Request $request)
    {
        
        $bike =  Bike::findOrFail($request->bike_id);
        // dd($bike);
        $bike->bikebrand_id = $request->bikebrand_id;
        $bike->user_id = $request->user_id;
        $bike->bikemodel_id = $request->bikemodel_id;
        $bike->color = $request->color;
        $bike->register_no = $request->register_no;

        if($request->file('logo_path')) {
            $fileName = time() . '_' . $request->file('logo_path')->getClientOriginalName();
            $filePath = $request->file('logo_path')->storeAs('uploads/bike', $fileName, 'public');
            $imagePath =  '/storage/uploads/bike/' . $fileName;
        } else {
            $imagePath = '';
        }
        $bike->logo_path = $imagePath;
        $bike->save();

        
        return response([ 'status'=>true,'message'=>'Bike Updated Successfully.','data'=>$bike]);

    }


    public function bikesellStore(Request $request)
    {

        $bike_data = BikeSell::where('bike_id',$request->bike_id)->value('id');
        $bikesell = BikeSell::findOrFail($bike_data);

        
        $bikesell->name = $request->bike_id;
        $bikesell->user_id = $request->user_id;
        // $bikesell->user_id = Auth::user()->id;
        $bikesell->bike_id = $request->bike_id;
        $bikesell->description = $request->description;
        $bikesell->price = $request->price;
        $bikesell->ownership = $request->ownership;
        $bikesell->bike_condition = $request->bike_condition;
        $bikesell->bike_for = 'Maintainance';
        $bikesell->year = $request->year;
        $bikesell->mileage = $request->mileage;
        $bikesell->run_km = $request->run_km;
        $bikesell->feature = json_encode($request->feature);
        $bikesell->phone = $request->phone;
        $bikesell->tax_cleared = $request->tax_cleared;
        // $bikesell->bike_no = '3';
        $bikesell->save();
        // dd($bikesell);

        return response([ 'status'=>true,'message'=>'Bike Brand Added Successfully.','data'=>$bikesell]);

    }




    public function sellStatus(Request $request){

        $bikesell_id = BikeSell::where('bike_id',$request->bike_id)->value('id');
        $bikesell = BikeSell::findOrFail($bikesell_id);
        
        $bikesell->bike_for = 'Sale';
        $bikesell->save();
        return response([ 'status'=>true,'message'=>'Bike Selled Successfully.','data'=>$bikesell]);
    }

    public function filterData(Request $request)
    {

        $ids = array_map('intval', $request->bikebrand_id);

        $datas = Bikemodel::whereIn('bikebrand_id', $ids)->get(['id', 'name']);

        return response(['status' => true, 'data' => $datas]);
    }

    public function usedBikeList()
        {
            $datas = Bike::whereHas('bikesell', function ($query) {
                              $query->where('bike_for', 'Sale');
                         })
                        ->with('bikesell')
                        ->get();
                        // dd($datas);
            $categories = Category::with('subCategory')->get();            
            $brands = Bikebrand::all(); 

            return response(['status' => true, 'datas' => $datas, 'categories' => $categories, 'brands' => $brands]);           

        }

    public function bikelist(Request $request)
    {
        // dd('ll');
        if($request->user_id){
            // dd($request);
            $brand = Bikebrand::all();
            $model = Bikemodel::all();
            $brands = Bikebrand::all();
            $topadds = Adds::all();
            $categories = Category::with('subCategory')->get();
            
            $features = Feature::all();
            $bikes = Bike::whereHas('bikesell', function ($query) use($request) {
                       $query->where('user_id', $request->user_id);
                       $query->where('bike_for', 'Maintainance');
                     })
                    ->with('bikesell')
                    ->with('bikebrand')
                    ->with('bikemodels')
                    ->get();
                    
           
            return response(['status' => true,'bikes' => $bikes]);   
            // return response(['status' => true,'brand' => $brand, 'model' => $model, 'brands' => $brands, 'topadds' => $topadds, 'categories' => $categories, 'features' => $features ,'bikes' => $bikes]);   

        }else{
            return redirect('/');
        }
    }


    public function categorylist()
    {
     
        $categories = Category::all();
        $brands = Bikebrand::all();
        $topadds = Adds::all();

        return response(['status' => true, 'categories' => $categories, 'brands' => $brands, 'topadds' => $topadds]);  

    }  

    public function featurelist()
    {
     
        $features = Feature::all();
        return response(['status' => true, 'features' => $features]);  

    }    
}