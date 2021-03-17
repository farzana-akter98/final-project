@extends('layouts.user_master')
@section('title','GroceryShop')
@section('content')
     <!-- GroceryShop page banner-->

    <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/gsbanner.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="banner-text text-center">
                        <h2>grocery shop of sylhet.</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end GroceryShop page banner-->   

    <section class="groceryshop-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <h2>grocery shop.</h2>
                    <h4 class="about-heading">check out grocery shop of in sylhet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($groceries as $item)
                    <div class="col-md-4" data-aos="fade-up"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="groceryshop flex">
                            <div class="groceryshop-content">
                                <div class="groceryshop-info">
                                    <h3>{{$item->name}}</h3>
                                    <div class="shoppingmall-contact flex">
                                        <i class="fas fa-map-pin"></i>
                                        <span class="address"><h4>{{$item->address}}</h4></span>
                                    </div>
                                    <div class="shoppingmall-contact flex">
                                        <i class="fas fa-mobile"></i>
                                        <span class="address"><h4>{{$item->contact}}</h4></span>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('public/uploads/groceryImages/'.$item->image)}}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection