<?php

namespace App\Http\Controllers\User;
use App\BlogCategory;
use App\BlogPost;
use App\BlogImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile');
    }
    public function view(){
        $blogcategories = BlogCategory::all();
        return view('user.blogpost',compact('blogcategories'));
    }

    public function store(Request $request){
        //dd($request->all());
        $blogpost=new BlogPost();
        $blogpost->title=$request->title;
        $blogpost->description=$request->description;
        $blogpost->blog_category_id=$request->blog_category_id;
        //image upload
        if($request->hasFile('imageName')){
          $extension = $request->imageName->extension();
          $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
          $fileName = $fileName.'.'.$extension;
          $blogpost->image = $fileName;

          $request->imageName->move('public/uploads/blogsImages/',$fileName);
        }
        $blogpost->save();
        $blogID = $blogpost->id;
        $images = $request->file('images');
        if ($request->hasFile('images')){
            foreach($images as $image){
              $extension1 = $image->extension();
              $filename1 = rand(123456,999999).'.'.$extension1;
              $image->move('public/uploads/blogsImages/',$filename1);

              $blogImage = new BlogImages();
              $blogImage->blog_post_id = $blogID;
              $blogImage->imageName = $filename1;
              $blogImage->save();
            }
        }
        return redirect()->back()->with('message', 'IT WORKS!');
    }
}
