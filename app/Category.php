<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
     public function product()
    {
        return $this->hasMany(Product::class);
    }
    
}