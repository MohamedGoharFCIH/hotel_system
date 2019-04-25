<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>Agaza | Admin-Feedbacks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css")}}" rel='stylesheet prefetch'>
    <link href="{{asset("css/font-awesome.min.css")}}"  rel="stylesheet"/>
    <link href="{{asset("css/bootstrap.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("css/style.css")}}"             rel="stylesheet"/>
    <link href="{{asset("images/lo.png")}}"             rel="icon" type="image/png"/>
  </head>

  <body>

    <!-- Header - Start  -->
    <header id="header">
      <div class="menu-button">
        <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        </div>
      </div>
      <div id="top-bar">
        <h3>Agaza Admin Dashboard</h3>
      </div>
    </header>
    <!-- Header - End  -->

    <!-- Navigation - Start  -->
    <nav id="sidemenu">
      <div class="main-menu">
        <ul class='main-menu'>
        <li>
          <a href="dashbord-rooms">
          <span class='glyphicon glyphicon-home'></span> Rooms
          </a>
        </li>
        <li class="link-active">
          <a href="dashbord-feedbacks">
          <span class='glyphicon glyphicon-comment'></span> Feedbacks
          </a>
        </li>
        </ul>
      </div>
      <p class="copyright">Agaza - &copy; 2018</p>
    </nav>
    <!-- Navigation - End  -->

    <!-- Content - Start  -->
    <div id="content-wrapper">

      <div class="container-fluid">
        <div class="text-center" style="margin: 50px;"><h1>View all feedbacks data</h1></div>
        <section class="feedbacks">
          <div class="container">
            <div class="feedbacks-data">
              <table class="feedbacks-table">
                  <tr>
                    <th>Feedback ID</th>
                    <th>Feedback OwnerID</th>
                    <th>Feedback Subject</th>
                    <th>Feedback Text</th>
                  </tr>

                  @foreach($feedbacks as $f)
                  <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->user_id}}</td>
                    <td>{{$f->subject}}</td>
                    <td> <a href="{{"/viewmessage/".$f->id}}" class="btn btn-primary"> Read Message </a></td>
                  </tr>
                @endforeach


                </table>
            </div>
          </div>
        </section>
      </div>
    </div>



    <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>

</html>
