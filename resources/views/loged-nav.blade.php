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

    <!--Start of social and info-->
    <section class="social-info">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="social-icons">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-google-plus" aria-hidden="true"></i>
              <i class="fa fa-rss" aria-hidden="true"></i>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="top-info">
              <p><a href="myaccount.html">Customer Name</a> | <a href="#">Log Out</a></p>
            </div>
          </div>
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
              <a href="index">
                <img src="images/logo.jpg" width="80" height="80">
              </a>
            </div>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">HOME</a></li>
              <li><a href="rooms">ROOMS</a></li>
              <li><a href="services">SERVICES</a></li>
              <li><a href="booking">BOOKING</a></li>
              <li><a href="contact">CONTACT US</a></li>
              <li><a href="myaccount">MY ACCOUNT</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!--end of navbar-->



    <script src="{{URL::asset("js/jquery-1.12.1.min.js")}}"></script>
    <script src="{{URL::asset("js/jquery.nicescroll.js")}}"></script>
    <script src="{{URL::asset("js/wow.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("dist/owl.carousel.min.js")}}></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>
</html>
