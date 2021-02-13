<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!---- Style Sheet --->

    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/style.css">
     
    
    
    <!---- Javascript --->
    
    <script src="{{asset('public/user_assets/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/masonry.pkgd.min.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/lightbox-plus-jquery.min.js"></script>  
    <script src="{{asset('public/user_assets/')}}/js/typed.js"></script>


     <title>Reizen | @yield('title')</title>

</head>
<body>
    <!--top area-->
    <!--header area-->

    @include('include.user.header')

    <!-- end header area & top area -->

    <!---- start content--->

    @yield('content')
    
    <!---- end content--->

    <!-- footer area start here -->

    @include('include.user.footer')   

    <!-- end footer area start here -->   
    
</body>
</html>