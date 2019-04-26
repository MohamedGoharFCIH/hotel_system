
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

  <!-- <div class="col-md-8 col-md-offset-2"> -->



              <div class="panel-body">

               <a href="/admin">Admin</a>

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
                    @auth
                        <div class="col-sm-6 col-xs-12">
                          <div class="top-info">
                            <p><a href="myaccount.html">{{Auth::user()->name }}</a> | <a href="{{ route('logout') }}">Log Out</a></p>
                          </div>
                        </div>
                    @endauth


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
                        <li><a href="/feedbacks-admin">Feedbacks</a></li>
                        <li><a href="/rooms-admin">Rooms</a></li>
                        <li><a href="/addadmin-admin">Admins</a></li>
                        <li><a href="/listusers-admin">Users</a></li>
                    </ul>
                </div>
            </div>
        </nav>





        {{--// end nav--}}
        </div>

      </div>

    </div>

</div>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="footer-contact">
              <h3>Contact Us</h3>
              <p>
                Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. <span>Vivamus magna justo</span>, 
                lacinia eget consectetur sed, convallis at tellus. <br><br>Nulla porttitor accumsan tincidunt.
                Vivamus tortor eget <span>felis porttitor</span> volutpat. Vestibulum ante ipsum primis in 
                faucibus orci luctus et ultrices posuere cubilia Curae.
              </p>
              <button>Contact Us</button>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="footer-office">
              <h3>Manger Office Hours</h3>
              <h4>Openning Days:</h4>
              <p>Monday – Friday : 9am to 20 pm</p>
              <p>Saturday : 9am to 17 pm</p>
              <h4>Vacations :</h4>
              <p>All Sunday Days</p>
              <p>All Official Holidays</p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="subscribe">
              <h3>Subscribe</h3>
              <p>
                Leave your mail and we'll talk to you soon.
              </p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Your Mail">
                <span class="input-group-btn">
                  <button class="btn" type="button">Submit</button>
                </span>
              </div>
              <div class="social-icons">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                  <i class="fa fa-rss" aria-hidden="true"></i>
                </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    

</body>
</html>