<?php

namespace App\Http\Controllers\User;
use App\BlogPost;
use App\BlogImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $blogs=BlogPost::all();
        return view('user.blogs',compact('blogs'));
    }

    public function view($id){
        $blog = BlogPost::find($id);
        $blogimage = BlogImages::find($id);
        return view('user.singleblog',compact('blog','blogimage'));
    }
}
