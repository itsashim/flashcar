<?php

namespace App\Http\Controllers\API;


use App\Model\Bikebrand;
use App\Model\Bike;
use App\Model\Bikemodel;
use App\Category;
use App\SubCategory;
use App\Model\Product;
use App\Model\Setting;
use App\Model\Adds;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
   public function productModalList(Request $request, $id)
   {
       $categories = Category::where('id','!=','11')->get();
       $brands = Bikebrand::all();
    
       $products = Product::whereHas('bikemodel', function ($query) use ($id) {
              $query->where('bikemodel_id', $id);
       })
       ->paginate();

       return response(['status'=>true,'products'=>$products,'categories'=>$categories,'brands'=>$brands]);

   }

   public function store(Request $request)
   {
    // dd($request);
       // return $request;
       $product = new Product;
       $product->name = $request->name;
       $product->slug = Str::slug($request->name);
       $product->description = $request->description;
       $product->price = $request->price;
       $product->expiry_date = $request->expiry_date;
       $product->quantity = $request->quantity;
       $product->type = $request->type;
       $product->category_id = $request->category_id;
       $product->sub_category_id = $request->sub_category_id;

       // $product->bikebrand_id = $request->bikebrand_id;
       // $product->bikemodel_id = $request->bikemodel_id;
       $product->offer_price = $request->offer_price;
       if ($request->file('photo')) {
           $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
           $filePath = $request->file('photo')->storeAs('uploads/products/image', $fileName, 'public');
           $imagePath =  '/storage/uploads/products/image/' . $fileName;
       } else {
           $imagePath = '';
       }
       // if (auth()->user()->usertype == 5) {
       //     $product->seller_id = Seller::where('user_id', auth()->user()->id)->first()->id;
       // }
       $product->photo = $imagePath;
       $product->save();

       $product->bikemodel()->sync($request->input('bikemodel_id'));
       if ($files = $request->file('gallery')) {
           foreach ($files as  $key => $file) {

               $gallery = new ProductGallery;
               $name = time() . $file->getClientOriginalName();
               $file->move('storage/app/public/uploads/product/galleries', $name);
               $gallery->product_id = $product->id;
               $gallery->image_path = 'uploads/product/galleries/' . $name;
               $gallery->save();
           }
       }
       return response([ 'status'=>true,'message'=>'Product Added Successfully.','data'=>$product]);

   }

   public function update(Request $request)
   {
       $product = Product::findOrFail($request->product_id);
       $product->name = $request->name;
       $product->slug = Str::slug($request->name);
       $product->description = $request->description;
       $product->price = $request->price;
       $product->expiry_date = $request->expiry_date;
       $product->quantity = $request->quantity;
       $product->type = $request->type;
       if ($request->sub_category_id) {
           $subCategory = SubCategory::where('id', $request->sub_category_id)->first();
           if ($subCategory) {
               $category = Category::whereId($subCategory->category_id)->first();
               if ($category) {
                   $product->sub_category_id = $request->sub_category_id;
                   $product->category_id = $category->id;
               }
           }
       }
       $product->offer_price = $request->offer_price;
       if ($request->file('photo')) {
           $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
           $filePath = $request->file('photo')->storeAs('uploads/products/image', $fileName, 'public');
           $imagePath =  '/storage/uploads/products/image/' . $fileName;
           $product->photo = $imagePath;
       }

       // if ($product) {
       //     $product->pivot->update(['pivot_column_name' => $newValue]);
       // } else {
       //     // Handle the case where the product is not found.
       // }

       $product->bikemodel()->sync($request->input('bikemodel_id'));

       $product->save();
       if ($files = $request->file('gallery')) {
           foreach ($files as  $key => $file) {

               $gallery = new ProductGallery;
               $name = time() . $file->getClientOriginalName();
               $file->move('storage/app/public/uploads/product/galleries', $name);
               $gallery->product_id = $product->id;
               $gallery->image_path = 'uploads/product/galleries/' . $name;
               $gallery->save();
           }
       }
       
       return response([ 'status'=>true,'message'=>'Product Updated Successfully.','data'=>$product]);
   }

   //Accessories List view
   public function accessoriesList()
   {
    // dd('lol');
       $accessories = Product::where('accessory', 'Yes')->get();
       $categories = Category::all();
       $brands = Bikebrand::all();
       $topadds = Adds::all();
       $products = Product::paginate(9);
       
       return response([ 'status'=>true,'message'=>'Accesories List.','accessories'=>$accessories,'categories'=>$categories,'brands'=>$brands,'topadds'=>$topadds,'products'=>$products]);
   }

   public function productUserList(Request $request)
   {
       if($request->user_id){
        
           $user_id = $request->user_id;

           $bikemodel_ids = Bike::where('user_id', $user_id)
                             ->pluck('bikemodel_id')
                             ->toArray();

           $products = Bikemodel::with('product')->whereIn('id',$bikemodel_ids)->orderBy('id', 'DESC')->with('product.cartDetails')->limit(6)->get(); 
       }
       else{
           $products = Product::orderBy('id', 'DESC')->limit(6)->get();

       }

       return response(['status'=>true,'products'=>$products]);

   }


   
}