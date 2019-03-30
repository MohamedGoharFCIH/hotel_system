@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agaza - Home</title>
    <link href="{{asset("css/font-awesome.min.css")}}"  rel="stylesheet"/>
    <link href="{{asset("css/bootstrap.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("css/style.css")}}"             rel="stylesheet"/>
    <link href="{{asset("images/lo.png")}}"             rel="icon" type="image/png"/>
</head>

<body>


<div class="container">


<div class="row">

  <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">

      <div class="panel-heading">Dashboard</div>

          <?php if(auth()->user()->type == 1){?>

              <div class="panel-body">

                <a href="{{url('admin/routes')}}">Admin</a>

              </div>

{{--start nav--}}


        <!--Start of social and info-->
        <section class="social-info">

                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                            <i class="fa fa-rss" aria-hidden="true"></i>
                        </div>
                    </div>


        </section>
        <!--Start of social and info-->

        <!--start of navbar-->
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a href="index.html">
                            <img src="images/logo.jpg" width="80" height="80">
                        </a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="">Users</a></li>
                        <li><a href="">Feedbacks</a></li>

                    </ul>
                </div>
            </div>
        </nav>





        {{--// end nav--}}

            <?php } else echo  '



        <!--Start of social and info-->
        <section class="social-info">

                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                            <i class="fa fa-rss" aria-hidden="true"></i>
                        </div>
                    </div>


        </section>
        <!--Start of social and info-->

        <!--start of navbar-->
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a href="index.html">
                            <img src="images/logo.jpg" width="80" height="80">
                        </a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="">Users</a></li>
                        <li><a href="/contact.html">Feedbacks</a></li>

                    </ul>
                </div>
            </div>
        </nav>



';?>

        </div>

      </div>

    </div>

</div>


</body>
@endsection
