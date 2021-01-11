<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table="locations";

    public function hotel()
    {
        return $this->hasMany('App\Hotels','location_id');
    }

    public function restaurent()
    {
        return $this->hasMany('App\RestaurentName','location_id');
    }

}
