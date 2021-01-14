@extends('layouts.user_master')
@section('title','Hotel')    
@section('content')
<!-- gallery page -->
<section class="hbanner-area bg">
    <div class="container">
        <div class="banner-text text-center">
            <h2>hotels of sylhet.</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        </div>
    </div>
</section>
<!---- gellery page value-->
<section class="hotel-area pt-100">
    <div class="section-title">
        <div class="container">
             <div class="row pt-100">
                 <div class="col-xl-12 about-title text-center">
                     <h2>hotels.</h2>
                     <h4 class="about-heading">check out hotels of places in sylhet</h4>
                 </div>
             </div>
         </div>
     </div>
 </section>
 
 <section class="hotelspage-area pb-100">
     <div class="container">          
             <div class="row">
                <div class="col-xl-4">
                     <a href="">
                        <div class="hotelspage text-center">
                            <img src="{{asset('public/user_assets/')}}/images/gallery/gallery1.jpg" alt="">
                            <div class="hotelspage-content">
                                <div class="hotelspageinfo">
                                     <h2>hotel name</h2> 
                                     <div class="row">
                                        <div class="place-location flex">
                                         <div class="col-6">
                                             <i class="fas fa-location-arrow"></i>
                                         </div>
                                         <div class="col-6">
                                          <h4>hotel address</h4>
                                         </div>
                                     </div>
                                    </div>
                                </div>
                            </div> 
                         </div>
                     </a>
                 </div>
             </div>
        </div>
</section>
@endsection