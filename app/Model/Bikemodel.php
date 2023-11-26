<?php

namespace App\Model;

use App\Model\Bikebrand;
use Illuminate\Database\Eloquent\Model;

class Bikemodel extends Model
{
    protected $table = 'bikemodel';
    public function bikebrand()
    {
        return $this->belongsTo(Bikebrand::class, "bikebrand_id", "id");
    }
    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function product()
    {
        return $this->belongsToMany(Product::class, 'bikemodel_product');
    }
    // public function product(){
    //     return $this->hasMany(Product::class);
    // }
}
