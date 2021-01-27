<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamousAttireController extends Controller
{
    public function index(){
        return view('user.famousattire');
    }
}
