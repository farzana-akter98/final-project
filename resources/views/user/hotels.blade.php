@extends('layouts.user_master')
@section('title','Hotel')    
@section('content')
    <!-- hotels page banner-->
    <section class="hbanner-area bg">
        <div class="container">
            <div class="banner-text text-center">
                <h2>hotels of sylhet.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- end hotels page banner-->

    <!---- hotels page value-->

    <section class="hotel-area pt-100">
        <div class="section-title">
            <div class="container">
                <div class="row pt-100">
                    <div class="col-md-12 about-title text-center">
                        <h2>hotels.</h2>
                        <h4 class="about-heading">check out hotels of in sylhet</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="hotelspage-area pb-100">
        <div class="container">          
                <div class="row">
                    @foreach ($hotels as $item)
                        <div class="col-md-4">
                            <a href="{{action('User\HotelsController@view',['id'=> $item->id])}}">
                                <div class="hotelspage">
                                    <img src="{{asset('public/uploads/hotelImages/'.$item->image)}}" alt="">
                                    <div class="hotel-overlay"><i class="fas fa-search-location"></i></div>
                                    <div class="hotelspage-content">
                                        <div class="hotelspageinfo text-center">
                                            <h2>{{$item->name}}</h2> 
                                            <i class="fas fa-map-marked-alt"></i>
                                            <span>{{$item->address}}</span>
                                        </div>
                                    </div> 
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>

    <!---- end hotels page value-->
@endsection