<?php

namespace App;

use App\Model\Department;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class,'hospital_departments');
    }
}