<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'id';
    protected $fillable = ["password"];
    public function department()
    {
        return $this->hasone('App\Model\Department', 'id', 'department_id');
    }

    public function TimeTabledata()//TimeTabledata
    {
        return $this->hasmany('App\Model\TimeTable', "doctor_id", "id");//user_id
    }

    public function city()
    {
        return $this->belongsTo('App\City',"city_id");
    }
    
    public function hospital()
    {  
         return $this->belongsTo('App\Hospital',"hospital_id","id");
    }
    
    public function user()
    {  
         return $this->belongsTo('App\User',"user_id","id");
    }

    public function rattingdata()
    {
        return $this->hasmany('App\Model\Review', 'doctor_id', 'id');
    }
}
