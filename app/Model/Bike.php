<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $table = 'bike';
    protected $primaryKey = 'id';

    public function bikemodels()
    {
        return $this->belongsTo(Bikemodel::class,"bikemodel_id","id");
    }

    public function bikebrand()
    {
        return $this->belongsTo(Bikebrand::class,"bikebrand_id","id");
    }

    public function bikesell()
    {
        return $this->belongsTo(BikeSell::class,"id","bike_id");
    }

    
}
?>