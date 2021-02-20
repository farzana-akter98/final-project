@extends('layouts.user_master')
@section('title','Profile')
@section('content')
    <section class="profile-area pb-100">
        <div class="back-img">
            <img src="{{asset('public/user_assets/')}}/images/place/place7.jpg" alt="">
        </div>
        <div class="profile-img">
            <img src="{{asset('public/user_assets/')}}/images/profile.jpg" alt="">
        </div>
    </section>
    <section class="profileform-area pb-100">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="profile-form">
                         <form action="">
                            <h2>profile</h2>
                            <div class="row">
                                <div class="col-md-6">
                                <input type="text" placeholder="First Name">
                                <input type="email" placeholder="Email"> 
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name">
                                    <input type="text" placeholder="Address">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="About You....."></textarea>
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