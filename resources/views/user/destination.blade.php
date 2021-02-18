@extends('layouts.user_master')
@section('title','Destination')
@section('content')
    <!-- Start Slide Area -->

    <section class="slide-area pb-100">
        <div class="img-slider">
          <div class="slide active">
            <img src="{{asset('public/user_assets/')}}/images/place/place7.jpg" alt="">
            <div class="banner-text bg text-center pt-10 pb-10">
              <h2>Name</h2>
              <p>here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
            </div>
          </div>
          <div class="slide">
            <img src="{{asset('public/user_assets/')}}/images/place/place8.jpeg" alt="">
            <div class="banner-text bg text-center pt-10 pb-10">
              <h2>Name</h2>
              <p>here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
            </div>
          </div>
          <div class="slide">
            <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
            <div class="banner-text bg text-center pt-10 pb-10">
              <h2>Name</h2>
              <p>here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
            </div>
          </div>
          <div class="slide">
            <img src="{{asset('public/user_assets/')}}/images/place/place4.jpg" alt="">
            <div class="banner-text bg text-center pt-10 pb-10">
              <h2>Name</h2>
              <p>here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
            </div>
          </div>
          <div class="nav">
            <div class="btn active"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
          </div>
        </div>
    </section>

    <!-- End Slide Area -->

    <!-- Start Destination Area -->

    <section class="destination-area pb-100">
      <div class="container">
          <div class="row pt-50 section-title">
            <div class="col-md-12 about-title text-center">
                <h2>destination.</h2>
                <h4 class="about-heading">check out the destination</h4>
            </div>
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-pills nav-justified flex-column flex-sm-row">
                    <li class="nav-item">
                      <a class="flex-sm-fill text-sm-center nav-link active" href="#">location</a>
                    </li>
                    <li class="nav-item">
                      <a class="flex-sm-fill text-sm-center nav-link" href="#">hotel</a>
                    </li>
                    <li class="nav-item">
                      <a class="flex-sm-fill text-sm-center nav-link" href="#">restaurant</a>
                    </li>
                    <li class="nav-item">
                      <a class="flex-sm-fill text-sm-center nav-link" href="#">transport cost</a>
                    </li>
                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link" href="#">emergency contact</a>
                      </li>
                  </ul>
            </div>
          </div>
      </div>
    </section>

    <!-- End Destination Area -->

    <!-- Start Slide Area Javascript-->

    <script type="text/javascript">

        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide=1;
  
        // javascript for image manual nav
  
        var manualNav = function(manual){
          
          slides.forEach((slide) => {
            slide.classList.remove('active');
            btns.forEach((btn) => {
              btn.classList.remove('active');
            });
          });
  
          slides[manual].classList.add('active');
          btns[manual].classList.add('active');
        }
  
        btns.forEach((btn, i) => {
          btn.addEventListener("click", () => {
            manualNav(i);
            currentSlide = i;
          });
        });
  
        // javascript for image auto play nav
  
        var repeat = function(activeClass){
          let active = document.getElementsByClassName('active');
          let i = 1;
          var repeater = () => {
            setTimeout(function(){
              [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
              });
              slides[i].classList.add('active');
              btns[i].classList.add('active');
              i++;
              if(slides.length == i){
                i=0;
              }
              if (i >= slides.length) {
                return;
              }
              repeater(); 
            }, 3000);
          }
          repeater(); 
        }
        repeat();
  
    </script>
  
    <!-- End Slide Area Javascript-->
@endsection