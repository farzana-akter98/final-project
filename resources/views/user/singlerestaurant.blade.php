@extends('layouts.user_master')
@section('title','SingleRestaurant')
@section('content')
    <!-- Start Slide Area -->

    <section class="slide-area pb-100">
      <div class="img-slider">
        <div class="slide active">
          <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide1.jpg" alt="">
          <div class="banner-text bg text-center pt-10 pb-10">
            <h2>Name</h2>
            <p>here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
          </div>
        </div>
        <div class="slide">
          <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide2.jpg" alt="">
          <div class="banner-text bg text-center pt-10 pb-10">
            <h2>Name</h2>
            <p>here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
          </div>
        </div>
        <div class="slide">
          <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide3.jpg" alt="">
          <div class="banner-text bg text-center pt-10 pb-10">
            <h2>Name</h2>
            <p>here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.here are many variations of passages of Lorem Ipsum available,don't look even slightly believable.</p>
          </div>
        </div>
        <div class="slide">
          <img src="{{asset('public/user_assets/')}}/images/singleresturent/slide4.jpg" alt="">
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

    <!-- Start Details Area-->

     <div class="singlerestaurant-area pb-100">
       <div class="container">
          <div class="row pt-50 section-title">
            <div class="col-md-12 about-title text-center">
              <h2>about us.</h2>
              <h4 class="about-heading">check out our amazing service</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h4 class="text-center">about us</h4>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
              <div class="row">
                <div class="col-md-6">
                  <h4>address</h4>
                  <span>123 Main Street</span>
                </div>
                <div class="col-md-6">
                  <h4>contact</h4>
                  <span>+44112345566</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img src="{{asset('public/user_assets/')}}/images/singleresturent/about.jpg" alt="">
            </div>
          </div>
       </div>
     </div>

    <!-- End Details Area-->

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