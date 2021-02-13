<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/style.css">
    <title>Registration Form</title>
</head>
<body>
    <section class="loginform-area">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="loginBox">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="loginContainer">
                <div class="loginForm">
                    <h2>registration form</h2>
                    <form action="">
                        <div class="inputBox">
                            <input type="text" placeholder="Username">
                        </div>
                        <div class="inputBox">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Register">
                        </div>
                        <p class="forget">Already have an account?<a href="{{action('User\LoginFormController@login')}}">Log In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>