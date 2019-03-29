@extends('layouts.app')

@section('content')
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Agaza - Login</title>
    <link href="{{asset("css/font-awesome.min.css")}}"  rel="stylesheet"/>
    <link href="{{asset("css/bootstrap.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("css/style.css")}}"             rel="stylesheet"/>
    <link href="{{asset("images/lo.png")}}"             rel="icon" type="image/png"/>
    <link href="{{asset("css/normalize.css")}}"  rel="stylesheet"/>
    <link href="{{asset("dist/assets/owl.carousel.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("dist/assets/owl.theme.default.min.css")}}"             rel="stylesheet"/>
    <link href="{{asset("dist/assets/owl.theme.green.min.css")}}"             rel="stylesheet" />
  </head>
  <body>

    <!--start of login page body-->
    <section class="login-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="login-info">
              <h1>Welcome To Agaza</h1>
              <h2>Login Now</h2>
              <P>We are wait for you to serve you with love <i class="fa fa-heart"></i></P>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2" required="required" name="login-user" autofocus>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-describedby="sizing-addon2" required="required" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                        <input type="submit" value="Login" class="btn">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </form>
                </div>
            </div>
          </div>
          <div class="col-md-6 hidden-sm hidden-xs" style="padding-left: 0px;">
            <div class="login-img text-center hidden-sm hidden-xs">
              <img src="images/logo.jpg" class="center-block hidden-sm hidden-xs">
              <div class="login-img-data">
                  <i class="fa fa-heart"></i>
                  <p>Work with love</p><br>
                  <i class="fa fa-users"></i>
                  <p>A very great community</p><br>
                  <i class="fa fa-commenting"></i>
                  <p>Easy to contact with us</p><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end of login page body-->

    <script src="{{URL::asset("js/jquery-1.12.1.min.js")}}"></script>
    <script src="{{URL::asset("js/jquery.nicescroll.js")}}"></script>
    <script src="{{URL::asset("js/wow.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("dist/owl.carousel.min.js")}}></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>
</html>
@endsection
