@extends('layouts.user_master')
@section('title','Contact')     
@section('content')
    
    <!-- Breadcumb Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h4>contact us</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb End Here -->


    <!-- contact area-->
    <section class="contact-area pt-100 pb-100">
        <div class="pt-100 section-title">
            <div class="container1">
                <div class="contactinfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span class="fas fa-map-marker-alt"></span>
                                <span class="text">Zindabazar,Sylhet</span>
                            </li>
                            <li>
                               <span class="<a href="tel:1234567890"><i class="fas fa-phone-alt"></i></a></span> 
                               <span class="text">123456789</span>
                            </li>
                            <li>
                                <span class="<a href="mailto:info@reizen.com"><i class="fas fa-envelope"></i></a></span> 
                               <span class="text">info@reizen.com</span>
                            </li>
                        </ul>
                        <ul class="sci">
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li> <a href=""><i class="fab fa-twitter"></i></a> </li>
                            <li> <a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="contactForm">
                    <h2>Send a Message</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">                      
                        </div>
                        <div class="inputBox w50">
                            <label for="fname">Last Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">                        
                        </div>
                        <div class="inputBox w50">
                            <label for="fname">Email Addres</label>
                            <input type="text" id="fname" name="email address" placeholder="Your email address..">                        
                        </div>
                        <div class="inputBox w100">
                            <label for="Your Message">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.."></textarea>                        
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="send">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection