<?php

namespace App\Http\Controllers;

use App\Model\Bikebrand;
use App\Model\Bikemodel;
use App\Model\Product;
use App\Category;
use App\ProductGallery;
use App\Seller;
use App\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use ParagonIE\Sodium\Compat;


class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-view', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
       
        if (auth()->user()->usertype == 5) {
            $seller = Seller::where('user_id', auth()->user()->id)->first();
            $data = Product::where('seller_id', $seller->id)->get();
        } else {
            $data = Product::all();
        }
        return view('admin.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brand = Bikebrand::all();
        $model = Bikemodel::all();
        return view('admin.products.create', compact('categories', 'brand', 'model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        if (auth()->user()->usertype == 5) {
            $product->seller_id = Seller::where('user_id', auth()->user()->id)->first()->id;
        }
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
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product->load('bikemodel');
        
        $categories = Category::with("subCategory")->get();
        $productGalleries = ProductGallery::where('product_id', $product->id)->get();
        $brands = Bikebrand::all();
        $models = Bikemodel::all();
       
        return view('admin.products.edit', compact('product', 'productGalleries', 'categories', 'brands','models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
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
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
