<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class,"category_id","id");
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
