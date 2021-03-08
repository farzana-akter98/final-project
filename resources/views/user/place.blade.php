@extends('layouts.user_master')
@section('title','Places')
@section('content')

    <!-- places page banner area -->

    <section class="banner-area bg" style="background: url('{{asset('public/user_assets/')}}/images/placebanner.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="banner-text text-center">
                <h2>enjoy your roaming.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- end places page banner area -->

    <!-- places page value -->

    <section class="place-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center">
                    <h2>places to visit.</h2>
                    <h4 class="about-heading">check out amazing places of sylhet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($locations as $item)
                    <div class="col-md-3">
                        <div class="place-card flex">
                            <div class="place-img">
                                <img src="{{asset('public/uploads/locationImages/'.$item->image)}}" alt="">
                            </div>
                            <div class="place-content text-center">
                                <h3>{{$item->name}}</h3>
                                <a href="{{action('User\PlaceController@view',['id'=> $item->id,'slug'=>str_slug($item->name)])}}">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>{{$item->address}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- end places page value -->
@endsection