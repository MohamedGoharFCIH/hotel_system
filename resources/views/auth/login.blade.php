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
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header"></div>

                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>

                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

