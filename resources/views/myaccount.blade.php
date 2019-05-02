<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agaza - My Account</title>
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
          @auth
          <div class="col-sm-6 col-xs-12">
            <div class="top-info">

              <p><a href="myaccount.html">{{Auth::user()->name }}</a> | <a href="{{ route('logout') }}">Log Out</a></p>

            </div>
          </div>
          @endauth
          @guest
          <div class="col-sm-6 col-xs-12">
            <div class="top-info">
              <p><a href="login.html">Log In</a> | <a href="sign-up.html">Sign Up</a></p>
            </div>
          </div>
          @endguest
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
              <li><a href="index">HOME</a></li>
              <li><a href="rooms">ROOMS</a></li>
              <li><a href="services">SERVICES</a></li>
              <li><a href="booking">BOOKING</a></li>
              <li><a href="contact">CONTACT US</a></li>
              <li class="active"><a href="#">MY ACCOUNT</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!--end of navbar-->

    <!--start of edit data-->
    <section class="edit-data">
      <div class="container">
          <div class="text-center"><h1>EDIT YOUR DATA <span> !</span></h1></div>
          <form class="edit-cts-data" method="POST" action="edit-myaccount">
            {{ csrf_field() }}
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2" style="font-size:12px">Name</span>
                      <input type="text" class="form-control" placeholder="Name" aria-describedby="sizing-addon2" name="edit-name" required="required" value="{{Auth::user()->name}}">
                    </div>
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2">@</span>
                      <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon2" name="edit-email" required="required" value="{{Auth::user()->email}}">
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="Password (leave it empty if you dont want change it )" aria-describedby="sizing-addon2" name="edit-password">
                    </div>
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-mobile"></i></span>
                      <input type="text" class="form-control" placeholder="Phone Number" aria-describedby="sizing-addon2" name="edit-phone_num" required="required"value="{{Auth::user()->phone_num}}">
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-home"></i></span>
                      <input type="text" class="form-control" placeholder="Address" aria-describedby="sizing-addon2" name="edit-address" required="required" value="{{Auth::user()->address}}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center"><input type="submit" class="save-btn" value="Save"></div>
            </form>

      </div>
    </section>
    <!--end of edit data-->

    <!--start of history-->
    <?php if(Auth::user()->type ==0){?>
    <section class="history">
      <div class="container">
        <div class="text-center"><h1>SEE YOUR HISTORY<span> !</span></h1></div>
        <div class="history-data">
          <table class="">
            <tr>

            </tr>
          </table>
          <table class="history-table">
              <tr>
                <th>Book ID </th>
                <th>Book Date </th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Room Num </th>
                <th>Poeaple Num</th>
                <th>Service </th>
                <th>Payment </th>
                <th>Price</th>
                <th>Control</th>
              </tr>
              <?php foreach ($hist as $book): ?>
                <tr>
                  <td>{{$book->id}}</td>
                  <td>{{$book->created_at}}</td>
                  <td>{{$book->check_in}}</td>
                  <td>{{$book->check_out}}</td>
                  <td>{{$book->num_rooms}}</td>
                  <td>{{$book->num_ppl}}</td>
                  <td>{{$book->service_type}}</td>
                  <td>{{$book->payment_method}}</td>
                  <td>{{$book->total_price}}</td>
                  <?php
                  if($book->check_out > date('Y-m-d') && ($book->payment_method != 'canceled'&& $book->payment_method != 'canceled by admin')){
                  ?>
                  <td><a href="{{'/cancelbook/'.$book->id}}" class="btn btn-warning">Cancel</a></td>

                <?php }elseif($book->payment_method == 'canceled'){?>

                  <td>Canceled at {{ $book->updated_at}}</td>

                <?php }elseif($book->payment_method == 'canceled by admin'){?>
                  <td>Canceld by admin at {{ $book->updated_at}}</td>
                <?php }else{?>
                <td>Finished</td>
              <?php }?>
                </tr>
              <?php endforeach; ?>


            </table>
        </div>
      </div>
    </section>

    <!--end of history-->
<?php }?>
    <!--start of footer-->
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
    <!--end of footer-->

    <!--start of last section-->
    <section class="last-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="copyright">
              <p>Agaza © All Rights Reserved. Developed by <a href="#">FCIH Team</a></p>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="footer-links">
              <ul class="list-unstyled">
                <li><a href="index">HOME</a></li>
                <li><a href="rooms">ROOMS</a></li>
                <li><a href="services">SERVICES</a></li>
                <li><a href="booking">BOOKING</a></li>
                <li><a href="contact">CONTACT US</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--ennd of last section-->

    <!--start of scroll to top button-->
    <div id="scrollTop">
        <i class="fa fa-chevron-circle-up fa-4x" aria-hidden="true"></i>
    </div>
    <!--end of scroll to top button-->

    <script src="{{URL::asset("js/jquery-1.12.1.min.js")}}"></script>
    <script src="{{URL::asset("js/jquery.nicescroll.js")}}"></script>
    <script src="{{URL::asset("js/wow.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("dist/owl.carousel.min.js")}}></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>
</html>
