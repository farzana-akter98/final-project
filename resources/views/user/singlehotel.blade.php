@extends('layouts.user_master')
@section('title','SingleHotel')
@section('content')
    <section class="singlehotel-area pb-100">
        <img src="{{asset('public/user_assets/')}}/images/hotel/hotel2.jpg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 about-title text-center">
                   <h2>hotel name</h2> 
                </div>
                <div class="col-xl-4 flex">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>address</h3>
                    <div class="row">
                        <div class="col-xl-12">

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 flex">
                    <i class="fas fa-globe-europe"></i>
                    <h3>website</h3>
                    <div class="row">
                        <div class="col-xl-12">
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 flex">
                    <i class="fas fa-address-book"></i>
                    <h3>contact</h3>
                    <div class="row">
                        <div class="col-xl-12">
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection