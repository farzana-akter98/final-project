@extends('layouts.user_master')
@section('title','Restaurants')
@section('content')

    <!-- restaurants page banner-->

    <section class="rbanner-area bg">
        <div class="container">
            <div class="banner-text text-center">
                <h2>Restaurants of Sylhet.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- End restaurants page banner-->

    <section class="restaurants-area pt-100 pb-100">
        <div class="container section-title">
            <div class="row pt-100">
                <div class="col-md-12 about-title text-center">
                    <h2>restaurants.</h2>
                    <h4 class="about-heading">check out amazing restaurants in sylhet</h4>
                </div>
            </div>
            <div class="row pt-50">
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="{{action('User\RestaurantController@index')}}">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r3.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r5.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r6.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r7.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r8.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="restaurant flex">
                        <div class="restaurant-content">
                            <div class="restaurant-info">
                                <h3>name</h3>
                                <p>There are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
                                <a href="">read more</a>
                            </div>
                        </div>
                        <img src="{{asset('public/user_assets/')}}/images/restaurant/r9.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection