<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content" method="post" action="{{url('signup')}}">
                    <form method="POST" id="signup-form" class="signup-form">
                    @csrf
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="full_name" id="name" placeholder="Your Full Name"/>
                            @if ($errors->has('full_name'))
                            <span>{{ $errors->first('full_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                            @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @if ($errors->has('password'))
                            <span>{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="signup" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="{{url('/login')}}" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>