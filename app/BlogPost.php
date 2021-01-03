<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table="blog_posts";
    
    public function category()
    {
        return $this->belongsTo('App\BlogCategory','blog_category_id');
    }
}
