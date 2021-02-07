@extends('layouts.user_master')
@section('title','Traditional Aliment')
@section('content')
    
    <!-- Traditional Aliment page banner-->

    <section class="tabanner-area bg">
        <div class="container">
            <div class="banner-text text-center">
                <h2>traditional aliment of Sylhet.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- End Traditional Aliment page banner-->
    
    <section class="tradaliment-area pt-100 pb-100">
        <div class="container section-title">
            <div class="row pt-100">
                <div class="col-md-12 about-title text-center">
                    <h2>traditional aliment.</h2>
                    <h4 class="about-heading">check out palatable traditional aliment of sylhet</h4>
                </div>
            </div>
            <div class="row pt-50">
                @foreach ($tfoods as $item)
                    <div class="col-md-4 flex">
                        <div class="tradaliment">
                            <span></span>
                            <div class="tradaliment-img">
                                <img src="{{asset('public/uploads/tradalimentImages/'.$item->image)}}" alt="">
                            </div>
                            <div class="tradaliment-content">
                                <div class="tradaliment-info">
                                    <h3>{{$item->name}}</h3>
                                    <p>{{$item->details}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
            $('.tradaliment').on('mouseenter', function(e){
                x=e.pageX - $(this).offset().left,
                y=e.pageY - $(this).offset().top;
                $(this).find('span').css({top:y, left:x});
            })
            $('.tradaliment').on('mouseout', function(e){
                x=e.pageX - $(this).offset().left,
                y=e.pageY - $(this).offset().top;
                $(this).find('span').css({top:y, left:x});
            })
        })
    </script> 
@endsection



    