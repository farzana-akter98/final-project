<?php

namespace App\Http\Controllers\User;
use App\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $blogs=BlogPost::all();
        return view('user.blogs',compact('hotels'));
    }

    public function view(){
        return view('user.singleblog');
    }
}
