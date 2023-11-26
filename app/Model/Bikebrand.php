<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bikebrand extends Model
{
    protected $table = 'bikebrand';
    protected $primaryKey = 'id';

    public function bikemodels()
    {
        return $this->hasMany(Bikemodel::class);
    }

    
}
?>