<?php

namespace App\Model;

use App\Model\Bikebrand;
use App\Model\Bikemodel;
use App\Model\CartDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function bikebrand()
    {
        return $this->belongsTo(Bikebrand::class);
    }
    public function bikeModel()
    {
        return $this->belongsToMany(Bikemodel::class, 'bikemodel_product');
    }
  
   public function cartDetails()
    {
         return $this->hasMany('App\Model\CartDetail','product_id','id');

     
    }
}
