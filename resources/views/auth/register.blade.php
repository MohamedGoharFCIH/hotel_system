@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Agaza - Sign Up</title>
    <link href="{{asset("css/font-awesome.min.css")}}"  rel="stylesheet"/>
    <link href="{{asset("css/bootstrap.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("css/style.css")}}"             rel="stylesheet"/>
    <link href="{{asset("images/lo.png")}}"             rel="icon" type="image/png"/>
    <link href="{{asset("css/normalize.css")}}"  rel="stylesheet"/>
    <link href="{{asset("dist/assets/owl.carousel.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("dist/assets/owl.theme.default.min.css")}}"             rel="stylesheet"/>
    <link href="{{asset("dist/assets/owl.theme.green.min.css")}}"               rel="stylesheet" />

  </head>
  <body>

    <!--start of sign-up page body-->
    <section class="sign-up-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="sign-up-info">
              <h1>Welcome To Agaza</h1>
              <h2>Sign Up Now</h2>
              <P>And join us to be our guest to serve you with love <i class="fa fa-heart"></i></P>
              <form class="sign-up-form" method="POST" action="{{ route('register') }}">
                        @csrf

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">N</span>
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your Name" aria-describedby="sizing-addon2" name="name" value="{{ old('name') }}" required="required" autofocus>
                                    @if ($errors->has('name'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                    @endif
                                </div>
                            </div>
                        </div>




                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">@</span>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" type="text" placeholder="Email" aria-describedby="sizing-addon2" required="required">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-mobile"></i></span>
                                    <input type="text" class="form-control{{ $errors->has('phone_num') ? ' is-invalid' : '' }}" placeholder="Phone Number" aria-describedby="sizing-addon2" name="phone_num" value="{{ old('phone_num') }}" required autofocus>

                                    @if ($errors->has('phone_num'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_num') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-home"></i></span>
                                    <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Address" aria-describedby="sizing-addon2" name="address" value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-describedby="sizing-addon2" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control"  placeholder="Retype Password" aria-describedby="sizing-addon2"name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn" value="Sign Up">
                    </form>
                </div>
          </div>
          <div class="col-md-6 hidden-sm hidden-xs" style="padding-left: 0px;">
            <div class="sign-up-img text-center hidden-sm hidden-xs">
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
    <!--end of sign-up page body-->

    <script src="{{URL::asset("js/jquery-1.12.1.min.js")}}"></script>
    <script src="{{URL::asset("js/jquery.nicescroll.js")}}"></script>
    <script src="{{URL::asset("js/wow.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("dist/owl.carousel.min.js")}}></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>
</html>
@endsection
