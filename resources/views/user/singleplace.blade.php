@extends('layouts.user_master')
@section('title','Place')
@section('content')
    <section class="banner-area pb-100">

    </section>
    <section class="singleplace-area pb-100">
        <div class="container">
            <div class="row">
                <div class="destination-content">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="location-details">
                          <h2>place details</h2>
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel iusto laborum expedita illum? Laudantium fugit tempore inventore ea, ex similique hic labore velit, commodi quae libero quos minus nobis temporibus.</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <div class="location">
                              <h5>location</h5>
                              <h4><i class="far fa-map"></i>sunamgonj</h4>
                            </div>
                          </div>
                          <div class="col-md-12 pt-50 text-center">
                            <div class="location">
                              <h1>89<span class="span">km</span></h1>
                              <p>Far From Sylhet City</p>
                            </div>
                          </div>
                          <div class="col-md-12 pt-50 text-center">
                            <div class="location">
                              <p>Best Time for Visit</p>
                              <h4>season <span class="span">[ Month - Month ]</span></h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="gothere text-center">
                          <button onclick="gothere()">
                            <span><i class="fas fa-place-of-worship"></i></span>
                            <h5>how to go there</h5>
                          </button>
                          <hr>
                          <div class="gothere-text" id="gothere-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="gothere text-center">
                          <button onclick="wherestay()">
                            <span><i class="fas fa-hotel"></i></span>
                            <h5>where to remain</h5>
                          </button>
                          <hr>
                          <div class="gothere-text" id="wherestay-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="gothere text-center">
                          <button onclick="whereeat()">
                            <span><i class="fas fa-cocktail"></i></span>
                            <h5>where to consume</h5>
                          </button>
                          <hr>
                          <div class="gothere-text" id="whereeat-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam et exercitationem distinctio nobis magni, neque, fuga maiores voluptatibus quos recusandae quam quis. Omnis, voluptatem pariatur iusto eaque illum earum laudantium?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi veritatis obcaecati neque vitae cumque itaque velit, odio quos hic aut, harum sapiente error corporis aliquid distinctio, cum libero atque veniam!Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-50 section-title">
                      <div class="col-md-12 pt-50 about-title text-center">
                        <h2>contiguous place.</h2>
                        <h4 class="about-heading">check out mosaic location in sylhet</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="owl-carousel owl-theme pt-50">
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="nearbyplace">
                            <div class="place-card flex">
                              <div class="place-img">
                                  <img src="{{asset('public/user_assets/')}}/images/place/place16.jpg" alt="">
                              </div>
                              <div class="place-content text-center">
                                  <h3>place name</h3>
                                  <a href="">
                                    <i class="fas fa-location-arrow"></i>
                                    <span>place address</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- Start Tab Areas Location's Button Javascript-->
     <script>
        var a;
        function gothere(){
          if (a == 1) {
            document.getElementById("gothere-text").style.display="block";
            return a=0;
          }
          else{
            document.getElementById("gothere-text").style.display="none";
            return a=1;
          } 
        }
        function wherestay(){
          if (a == 1) {
            document.getElementById("wherestay-text").style.display="block";
            return a=0;
          }
          else{
            document.getElementById("wherestay-text").style.display="none";
            return a=1;
          } 
        }
        function whereeat(){
          if (a == 1) {
            document.getElementById("whereeat-text").style.display="block";
            return a=0;
          }
          else{
            document.getElementById("whereeat-text").style.display="none";
            return a=1;
          } 
        }
    </script>
      <!-- End Tab Areas Location's Button Javascript--->    
  
      <!-- Start Nearby Place Jquery -->
    <script>
        $(document).ready(function(){
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            dots: false,
            stagePadding: 50,
            nav:true,
            responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
            }
          })
        });
    </script>
      <!-- End Nearby Place Jquery -->

@endsection