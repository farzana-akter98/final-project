<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/style.css">
     <title>Reizen | @yield('title')</title>

</head>
<body>
    <!--top area-->
    <!--header area-->

    @include('include.user.header')

    <!----content--->

    @yield('content')

    <!-- Footer Area Start Here -->

    @include('include.user.footer')   
</body>
</html>