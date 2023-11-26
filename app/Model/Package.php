<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Department;

class Package extends Model
{
    protected $table = 'price_package';
    protected $primaryKey = 'id';
    
    // public function deparmentdata(){
    // 	return $this->hasOne('App\Model\Department', 'id', 'department_id');
    // }

    public function deparmentdata(){
        return $this->belongsTo(Department::class,"department_id","id");

    }


     
}
?>