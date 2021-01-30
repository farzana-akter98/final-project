@extends('layouts.user_master')
@section('title','GroceryShop')
@section('content')
     <!-- GroceryShop page banner-->

    <section class="gsbanner-area bg">
        <div class="container">
            <div class="banner-text text-center">
                <h2>grocery shop of sylhet.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- end GroceryShop page banner-->   

    <section class="groceryshop-area pt-100">
        <div class="section-title">
            <div class="container">
                <div class="row pt-100">
                    <div class="col-md-12 about-title text-center">
                        <h2>grocery shop.</h2>
                        <h4 class="about-heading">check out grocery shop of in sylhet</h4>
                    </div>
                </div>
                <div class="row pt-50">
                    @foreach ($groceries as $item)
                        <div class="col-md-4">
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
        </div>
    </section>

@endsection