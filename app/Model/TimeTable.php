<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
Use App\Model\Doctor;

class TimeTable extends Model
{
    protected $table = 'time_table';
    protected $primaryKey = 'id';
    protected $fillable=[
        'doctor_id',
        'day',
        'from',
        'to',
        'token',
        'status'
    ];
}
?>