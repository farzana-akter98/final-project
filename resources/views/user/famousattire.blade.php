@extends('layouts.user_master')
@section('title','Famous Attire')
@section('content')

    <!-- Famous Attire page banner-->

    <section class="fmabanner-area bg">
        <div class="container">
            <div class="banner-text text-center">
                <h2>famous attire of Sylhet.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- End Famous Attire page banner-->
    
    <section class="famousattire-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center">
                    <h2>famous attire.</h2>
                    <h4 class="about-heading">check out mosaic shopping malls in sylhet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($fclothes as $item)
                    <div class="col-md-3">
                        <div class="famousattire">
                            <div class="famousattire-img">
                                <img src="{{asset('public/uploads/fclothImages/'.$item->image)}}" alt="">
                            </div>
                            <div class="famousattire-content">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->details}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection