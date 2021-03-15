@extends('layouts.user_master')
@section('title','Blogs')
@section('content')
    <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/blogbanner.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="banner-text text-center">
                <h2>our blog gallery.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center">
                    <h2>blogs.</h2>
                    <h4 class="about-heading">check out amazing blogs of sylhet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img src="{{asset('public/uploads/blogsImages/'.$item->image)}}" alt="">
                                <div class="blog-date text-center">
                                    <span>{{date('g',strtotime($item->created_at))}}</span>
                                    <span>{{date('M',strtotime($item->created_at))}}</span>
                                    <span>{{date('Y',strtotime($item->created_at))}}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h2>{{$item->title}}</h2>
                                <span><i class="far fa-user"></i><h6>author name</h6></span>
                                <p>{{str_limit($item->description,50,'....')}}</p>
                                <a href="{{action('User\BlogController@view',['id'=> $item->id,'slug'=>str_slug($item->title)])}}" class="btn-common">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection