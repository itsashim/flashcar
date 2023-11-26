<?php

namespace App;

use App\Model\Bikebrand;
use App\Model\Bikemodel;
use App\CartDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    public function category()
    {
        return $this->belongsTo(Category::class ,"category_id","id");
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function bikebrand()
    {
        return $this->belongsTo(Bikebrand::class);
    }
    public function bikemodel()
    {
        return $this->belongsToMany(Bikemodel::class);
    }

    public function test()
    {
 
        return $this->hasMany(CartDetail::class, 'product_id', 'id');
    }

    
}
