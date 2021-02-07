<?php

namespace App\Http\Controllers\User;
use App\TransportCost;
use App\TransportType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportCostController extends Controller
{
    public function index(){
        //$transcosts = TransportCost::all();
        $transtypes = TransportType::all();
        return view('user.transportcost',compact('transtypes'));
    }
}
