<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginFormController extends Controller
{
    public function login(){
        return view('user.loginform');
    }
    public function register(){
        return view('user.registerform');
    }
}
