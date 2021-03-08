@extends('layouts.user_master')
@section('title','Profile')
@section('content')
    <section class="profile-area pb-100">
        <div class="back-img">
            <img src="{{asset('public/user_assets/')}}/images/place/place7.jpg" alt="">
        </div>
        <div class="profile-img">
            {{-- @if ($blogpost->image == 'default.jpg')
                    <img width="250" height="130" src="{{asset('public/image/default.jpg')}}" alt="">
                @else
                    <img width="250" height="130" id="profile_image" src="{{asset('public/uploads/blogsImages/'.$blogpost->image)}}" alt="">
            @endif --}}
        </div>
    </section>
    <section class="profileform-area pb-100">
         <div class="container">
             <div class="row mt-3">
                 <div class="col-md-4 flex">
                     <div class="blogpost-a text-center">
                        <h2>post your own blog</h2>
                        <div class="blogpost-link">
                            <a href="{{action('User\ProfileController@view')}}" class="btn-common">post blog</a>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-8">
                     <div class="profile-form">
                         <form action="">
                                {{-- {{Auth::user()->id}} --}}
                                <h2>profile</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                    <input type="text" placeholder="Username">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" name="" onchange="document.getElementById('profile_image').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <textarea name="" id="" placeholder="About You....."></textarea>
                                        <input type="submit" value="Save">
                                    </div>
                                </div>
                          </form>
                     </div>
                 </div>
             </div>
         </div>
    </section>
@endsection