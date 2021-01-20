@extends('layouts.user_master')
@section('title','Home')
@section('content')
  <!--homepage banner area-->
    
    <section class="welcome-area cover">
            <div class="welcome boundary">
                <div class="banner-text text-center">
                    <h2>welcome to the sylhet wholeheartedly.</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
            </div>
    </section>

  <!-- end homepage banner area-->
   
  <!--homepage destination-->
 
    <section class="destinaton-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 destinationform">
                    <div class="destination">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>from</h4>
                                    <input type="text">
                                </div>
                                <div class="col-md-4">
                                    <h4>to</h4>
                                    <input type="text">
                                </div>
                                <div class="col-md-4">
                                    <h4>search</h4>
                                    <input type="submit" value="destination">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- end homepage destination-->

  <!--homepage about us-->

    <section class="about-area pt-100">
            <div class="pt-100 section-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 about-title">
                            <h2> about us.</h2>
                            <h4 class="about-heading">WE'RE MORE THAN A DIGITAL AGENCY</h4>
                        </div>
                        <div class="col-md-6 text right about-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                            <a href="">read more</a>
                        </div>
                </div>
                </div>
            </div>    
    </section>
    <section class="about-area1 pb-100">
            <div class="container">       
                <div class="about row">
                        <div class="col-md-4">
                            <div class="about-icon"><i class="far fa-question-circle"></i></div>
                            <div class="single-about">
                                
                                <h4>Who we are</h4>
                                <p class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quae similique explicabo sed, fuga eius nostrum! Illo delectus distinctio temporibus.</p>
                                <a href="" class="btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-icon"><i class="fab fa-think-peaks"></i></div>
                            <div class="single-about">
                                
                                <h4>Our philosophy</h4>
                                <p class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quae similique explicabo sed, fuga eius nostrum! Illo delectus distinctio temporibus.</p>
                                <a href="" class="btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-icon"><i class="fas fa-network-wired"></i></div>
                            <div class="single-about">
                                
                                <h4>How we work</h4>
                                <p class="about-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quae similique explicabo sed, fuga eius nostrum! Illo delectus distinctio temporibus.</p>
                                <a href="" class="btn-primary">Read More</a>
                            </div>
                        </div>
                </div>    
            </div>
    </section>

   <!-- end homepage about us-->

   <!--homepage visit place-->

    <section class="place-area pb-100">
        <div class=" section-title">
            <div class="container">
                <div class="row pt-100">
                    <div class="col-md-12 about-title text-center">
                        <h2>places to visit.</h2>
                        <h4 class="about-heading">check out amazing places of sylhet</h4>
                    </div>
                </div>
                <div class="row pt-100">
                    <div class="col-md-3">
                        <div class="place-card flex">
                            <div class="place-img">
                                <img src="{{asset('public/user_assets')}}/images/place/place2.jpg" alt="">
                            </div>
                            <div class="place-content text-center">
                                <h3>place name</h3>
                                <div class="row"><a href="">
                                    <div class="place-location flex">
                                        <div class="col-md-12 flex">
                                            <i class="fas fa-location-arrow"></i>
                                            <span class="address"><h4>location address</h4></span>
                                        </div>
                                </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="place-card flex">
                            <div class="place-img">
                                <img src="{{asset('public/user_assets')}}/images/place/place3.jpg" alt="">
                            </div>
                            <div class="place-content text-center">
                                <h3>place name</h3>
                                <div class="row"><a href="">
                                    <div class="place-location flex">
                                        <div class="col-md-12 flex">
                                            <i class="fas fa-location-arrow"></i>
                                            <span class="address"><h4>location address</h4></span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="place-card flex">
                            <div class="place-img">
                                <img src="{{asset('public/user_assets')}}/images/place/place4.jpg" alt="">
                            </div>
                            <div class="place-content text-center">
                                <h3>place name</h3>
                                <div class="row"><a href="">
                                    <div class="place-location flex">
                                        <div class="col-md-12 flex">
                                            <i class="fas fa-location-arrow"></i>
                                            <span class="address"><h4>location address</h4></span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="place-card flex">
                            <div class="place-img">
                                <img src="{{asset('public/user_assets')}}/images/place/place9.jpg" alt="">
                            </div>
                            <div class="place-content text-center">
                                <h3>place name</h3>
                                <div class="row"><a href="">
                                    <div class="place-location flex">
                                        <div class="col-md-12 flex">
                                            <i class="fas fa-location-arrow"></i>
                                            <span class="address"><h4>location address</h4></span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!--end homepage visit place-->

   <!--service part-->

    <section class="service-area pb-100">
        <div class="pt-100 section-title">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 about-title">
                        <h2> services.</h2>
                        <h4 class="about-heading">services we provide</h4>
                    </div>
                </div>

                <div class="row pt-100">
                    <div class="col-md-4">
                        <a href="{{action('User\HotelsController@index')}}">
                            <div class="services">
                                <i class="fas fa-hotel"></i>
                                <h3 class="title">hotels</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                <i class="fas fa-utensils"></i>
                                <h3 class="title">restaurants</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                <i class="fas fa-mountain"></i>
                                <h3 class="title">tourists attraction</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                <i class="fas fa-car-side"></i>
                                <h3 class="title">transport cost</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                <i class="fas fa-store"></i>
                                <h3 class="title">shopping mall</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                <i class="far fa-hospital"></i>
                                <h3 class="title">emergency contacts</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                    <i class="fas fa-tshirt"></i>
                                    <h3 class="title">famous attire</h3>
                                    <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                <i class="fas fa-coffee"></i>
                                <h3 class="title">traditional aliment</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="services">
                                <i class="fas fa-shopping-cart"></i>
                                <h3 class="title">grocery shops</h3>
                                <i class="fas fa-hand-point-right"></i>
                            </div>
                        </a>
                    </div>
                </div>    
            </div>
        </div>
    </section>

   <!-- end service part-->

   <!-- homepage gallery-->

    <section class="gallery-area">
        <div class="section-title">
            <div class="container">
                    <div class="row pt-100">
                        <div class="col-md-12 about-title text-center">
                            <h2>gallery.</h2>
                            <h4 class="about-heading">check out amazing gallery of places in sylhet</h4>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <section class="gallery-area1 pb-100">
            <div class="container">          
                    <div class="row">
                        <div class="col-md-3">
                            <div class="gallery">
                                <div class="card1 gallery-img">
                                    <img src="{{asset('public/user_assets/')}}/images/galleryh5.jpg"/>
                                </div>
                                <div class="card1 gallery-content">
                                    <div class="info">
                                        <h4>place name</h4> 
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gallery">
                                <div class="card1 gallery-img">
                                    <img src="{{asset('public/user_assets/')}}/images/galleryh3.jpg"/>
                                </div>
                                <div class="card1 gallery-content">
                                    <div class="info">
                                        <h4>place name</h4> 
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gallery">
                                <div class="card1 gallery-img">
                                    <img src="{{asset('public/user_assets/')}}/images/galleryh6.jpg"/>
                                </div>
                                <div class="card1 gallery-content">
                                    <div class="info">
                                        <h4>place name</h4> 
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gallery">
                                <div class="card1 gallery-img">
                                    <img src="{{asset('public/user_assets/')}}/images/galleryh4.jpg"/>
                                </div>
                                <div class="card1 gallery-content">
                                    <div class="info">
                                        <h4>place name</h4> 
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
            </div>
    </section>

   <!--end homepage gallery-->

   <!-- homepage blog-->

   
    <section class="blog-area pb-100" >
        <div class="pt-100 section-title">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 about-title">
                        <h2> latest blogs.</h2>
                        <h4 class="about-heading">learn more through our latest blog</h4>
                    </div>
                </div>
                <div class="row pt-100">
                    <div class="col-md-4">
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{asset('public/user_assets/')}}/images/banner.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h4>Blog 1</h4>
                                <a href="">24 Nov 2020</a> / 
                                <a href="">Admin</a>
                                <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Voluptatem aliquam adipisci quod architecto labore iure quia velit quaerat veniam porro.</p>
                                <a href="" class="btn-primary">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{asset('public/user_assets/')}}/images/banner.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h4>Blog 2</h4>
                                <a href="">24 Nov 2020</a> / 
                                <a href="">Admin</a>
                                <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Voluptatem aliquam adipisci quod architecto labore iure quia velit quaerat veniam porro.</p>
                                <a href="" class="btn-primary">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{asset('public/user_assets/')}}/images/banner.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h4>Blog 3</h4>
                                <a href="">24 Nov 2020</a> / 
                                <a href="">Admin</a>
                                <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Voluptatem aliquam adipisci quod architecto labore iure quia velit quaerat veniam porro.</p>
                                <a href="" class="btn-primary">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
  
    <!-- end homepage blog-->
@endsection