<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class BikeSell extends Model
{
	protected $table = 'bike_sell';
	// protected $table='bag_brands';
	protected $fillable=['bikebrand_id','bikemodel_id'];

	public function bike()
	{
	    return $this->belongsTo(Bike::class,"bike_id","id");
	}

	public function user()
	{
	    return $this->belongsTo(User::class,"user_id","id");
	}

	

}
