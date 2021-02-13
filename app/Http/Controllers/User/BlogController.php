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

    /*public function view($id){
        $blog= BlogPost::find($id);
        return view('user.singleblog',compact('blog'));
    }*/
}
