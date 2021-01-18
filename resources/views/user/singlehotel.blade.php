@extends('layouts.user_master')
@section('title','SingleHotel')
@section('content')
    <section class="singlehotel-area pb-100">
        <img src="{{asset('public/user_assets/')}}/images/hotel/hotel7.jpg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 about-title text-center">
                   <h2>hotel name</h2> 
                </div>
                <div class="col-md-4 text-center single-hotel">
                    <i class="fas fa-map-marked-alt"></i>
                    <span class="hotel-awc">address</span>
                    <div class="row">
                        <div class="single-hotel-col col-md-12 ">
                            <h4>123 Main Street, New York, NY 10030</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center single-hotel">
                    <i class="fas fa-globe-europe"></i>
                    <span class="hotel-awc">website</span>
                    <div class="row">
                        <div class="col-md-12 single-hotel-col">
                            <a href="#">www.hotelname.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center single-hotel">
                    <i class="fas fa-address-book"></i>
                    <span class="hotel-awc">contact</span>
                    <div class="row">
                        <div class="col-md-12 single-hotel-col">
                            <a href="#">+123456789</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Details section -->

    <section class="details-area pb-100">
        <div class="container">
            <div class="details pt-100">
                <div class="single-details circle-img">
                    <img src="{{asset('public/user_assets/')}}/images/hotel/details2.jpg" alt="">
                </div>
                <div class="single-details circle-img1">
                    <img src="{{asset('public/user_assets/')}}/images/hotel/details1.jpg" alt="">
                </div>
                <div class="">
                    <h2>hotel details</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End Details section -->

@endsection