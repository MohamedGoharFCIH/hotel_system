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
          <a href="rooms-admin">
          <span class='glyphicon glyphicon-home'></span> Rooms
          </a>
        </li>
        <li >
          <a href="feedbacks-admin">
          <span class='glyphicon glyphicon-envelope'></span> Feedbacks
          </a>
        </li>
        <li>
          <a href="listusers-admin">
          <span class='glyphicon glyphicon-user'></span> Users
          </a>
        </li>
          <li>
          <a href="addadmin-admin">
          <span class='glyphicon glyphicon-king'></span> Admins
          </a>
        </li>
        <li>
          <a href="home">
          <span class='glyphicon glyphicon-cog'></span> Main menu
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
        <div class="text-center" style="margin: 50px;"><h1>Edit User</h1></div>
        <section class="feedbacks">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-heading">Edit  Results</div>
          
          
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif
          
                        @if (\Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif
          
          
                      <div class="panel-body">
                         <form class="form-horizontal" role="form" action="/editview/{{$user->id}}" method="post">
                                {{csrf_field ()}}
                          <table class="table table-striped">
                                  <thead>
                                      <tr>
                                          <th>name</th>
                                          <th>Email</th>
                                          <th>Address</th>
                                          <th>Phone_num</th>
          
                                      </tr>
                                  </thead>
                                  <tbody class="resultbody">
                                      <tr>
          
                                          <td>
                                          <div class="form-group{{$errors->has('name') ? 'has-error' : '' }}">
                                                <input type="text" class="name form-control" name="name" value="{{$user->name}}">
                                        </div>
                                          </td>
                                          <td>
                                              <input type="text" class="fname form-control" name="email" value="{{$user->email }}">
                                          </td>
                                          <td>
                                              <input type="text" class="rollno form-control" name="address" value="{{$user->address}}">
                                          </td>
                                          <td>
                                              <input type="text" class="obtainedmarks form-control" name="phone_num" value="{{$user->phone_num}}" value="{{Request::old('phone_num')}}">
          
                                          </td>
                                      </tr>
          
                                  </tbody>
                              </table>
                              <center>
                              <input type="submit" class="btn btn-lg btn-default" value="Save"></center>
                              </form>
                      </div>
                  </div>
              </div>
          
          </div>


          </div>
        </section>
      </div>
    </div>



    <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>

</html>
