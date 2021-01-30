<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/style.css">
   
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

    
    <!---- javascript --->

    <script src="{{asset('public/user_assets/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>