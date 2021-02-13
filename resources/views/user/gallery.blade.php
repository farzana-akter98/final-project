@extends('layouts.user_master')
@section('title','Gallery')    
@section('content')
    <!-- gallery page banner-->

    <section class="gbanner-area bg">
        <div class="container">
            <div class="banner-text text-center">
                <h2>our roaming gallery.</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>

    <!-- end gallery page banner-->

    <!---- gallery page value-->

    <section class="gallery-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50 section-title">
                <div class="col-md-12 about-title text-center">
                    <h2>gallery.</h2>
                    <h4 class="about-heading">check out amazing gallery of places in sylhet</h4>
                </div>
            </div>
            
            <div class="grid">
                <div class="grid-sizer"></div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery1.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery1.jpg" alt=""></a>
                </div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery8.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery8.jpg" alt=""></a>
                </div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery7.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery7.jpg" alt=""></a>
                </div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery4.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery4.jpg" alt=""></a>
                </div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery5.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery5.jpg" alt=""></a>
                </div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery6.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery6.jpg" alt=""></a>
                </div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery2.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery2.jpg" alt=""></a>
                </div>
                <div class="grid-item">
                    <a href="{{asset('public/user_assets/')}}/images/gallery/gallery3.jpg"  data-lightbox="mygallery" data-title="Location Address"><img src="{{asset('public/user_assets/')}}/images/gallery/gallery3.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <script>
        var grid = document.querySelector('.grid');
        var msnry = new Masonry( grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
        });

        imagesLoaded( grid ).on( 'progress', function() {
        // layout Masonry after each image loads
        msnry.layout();
        });
    </script>

    <!---- end gallery page value-->

@endsection

    
    

    