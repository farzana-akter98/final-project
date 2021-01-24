<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportCost extends Model
{
    protected $table="transport_costs";

    public function transporttype()
    {
        return $this->belongsTo('App\TransportType','transport_type_id');
    }
    
}
