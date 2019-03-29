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
              <a href="index.html">
                <img src="images/logo.jpg" width="80" height="80">
              </a>
            </div>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">HOME</a></li>
              <li><a href="rooms.html">ROOMS</a></li>
              <li><a href="services.html">SERVICES</a></li>
              <li><a href="booking.html">BOOKING</a></li>
              <li><a href="contact.html">CONTACT US</a></li>
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
          <form class="edit-cts-data" method="POST">
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2">FN</span>
                      <input type="text" class="form-control" placeholder="Fristname" aria-describedby="sizing-addon2" name="edit-fname" required="required">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2">LN</span>
                      <input type="text" class="form-control" placeholder="Lastname" aria-describedby="sizing-addon2" name="edit-lname" required="required">
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2">@</span>
                      <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon2" name="edit-email" required="required">
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2" name="edit-password" required="required">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="SSN" aria-describedby="sizing-addon2" name="edit-ssn" required="required">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-mobile"></i></span>
                      <input type="text" class="form-control" placeholder="Phone Number" aria-describedby="sizing-addon2" name="edit-phone" required="required">
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-home"></i></span>
                      <input type="text" class="form-control" placeholder="Address" aria-describedby="sizing-addon2" name="edit-address" required="required">
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div class="text-center"><input type="submit" class="save-btn" value="Save"></div>
      </div>
    </section>
    <!--end of edit data-->

    <!--start of history-->
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
                <th>Book ID</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Number of rooms</th>
              </tr>
              <tr>
                <td>$10</td>
                <td>Buy Any Chair & Desk</td>
                <td>GDS</td>
                <td>N/A</td>
              </tr>
              <tr>
                <td>$25</td>
                <td>Any Chair & Desk Valued at $400+</td>
                <td>GDS25</td>
                <td>N/A</td>
              </tr>
              <tr>
                <td>$75</td>
                <td>Any Chair & Desk Valued at $750+</td>
                <td>GDS75</td>
                <td>N/A</td>
              </tr>
              <tr>
                <td>$100</td>
                <td>Any Chair & Desk Valued at $1000+</td>
                <td>GDS100</td>
                <td>N/A</td>
              </tr>
            </table>
        </div>
      </div>
    </section>
    <!--end of history-->
    
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
                <li><a href="index.html">HOME</a></li>
                <li><a href="rooms.html">ROOMS</a></li>
                <li><a href="services.html">SERVICES</a></li>
                <li><a href="booking.html">BOOKING</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
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
