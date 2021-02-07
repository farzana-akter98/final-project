<?php

namespace App\Http\Controllers\User;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $places = Location::latest()->paginate(4);
        return view('user.index',compact('places'));
    }
}
