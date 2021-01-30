<?php

namespace App\Http\Controllers\User;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    public function index(){
        $locations = Location::all();
        return view('user.place',compact('locations'));
    }
}
