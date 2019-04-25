<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>Agaza | Admin-Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css")}}" rel='stylesheet prefetch'>
    <link href="{{asset("css/font-awesome.min.css")}}"  rel="stylesheet"/>
    <link href="{{asset("css/bootstrap.min.css")}}"     rel="stylesheet"/>
    <link href="{{asset("css/style.css")}}"             rel="stylesheet"/>
    <link href="{{asset("images/lo.png")}}"             rel="icon" type="image/png"/>
  </head>

  <body>
  <style>
  .rooms-buttons-closed button:hover{
  background-color: red;
  color: #333;
  width: 50px;
  height: 50px;
  text-align: center;
  margin: 0px 10px;
  border: none;
}
  }
  .rooms-buttons-available button{
  background-color: green;
  color: #333;
  width: 50px;
  height: 50px;
  text-align: center;
  margin: 0px 10px;
  border: none;
}
  }
  </style>

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
        <li class="link-active">
          <a href="#">
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
        <div class="text-center">
          <h1>Welcome Admin <span>!</span></h1>
          <h3>Watch all rooms and you have all rights to do anything</h3>
        </div>
           <form method="POST" action = "">
            <div class="form-group row">
               <label for="email" class="col-sm-2 col-form-label text-md-right">Room No.</label>
                 <div class="col-md-2">
                   <input type="text"class="form-control" name="room_num" value=" " required>
                 </div>
                <select>
                  <option value="0">Close the Room</option>
                  <option value="1">Free the Room</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ok !</button>
           </form>
        <h3>First Floor</h3>
        <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button class="rooms-buttons-closed">101</button>
                <button>102</button>
                <button>103</button>
                <button>104</button>
                <button>105</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>106</button>
                <button>107</button>
                <button>108</button>
                <button>109</button>
                <button>110</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>111</button>
                <button>112</button>
                <button>113</button>
                <button>114</button>
                <button>115</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>116</button>
                <button>117</button>
                <button>118</button>
                <button>119</button>
                <button>120</button>
              </div>
            </div>
          </div>
          <h3>Second Floor</h3>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>201</button>
                <button>202</button>
                <button>203</button>
                <button>204</button>
                <button>205</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>206</button>
                <button>207</button>
                <button>208</button>
                <button>209</button>
                <button>210</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>211</button>
                <button>212</button>
                <button>213</button>
                <button>214</button>
                <button>215</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>216</button>
                <button>217</button>
                <button>218</button>
                <button>219</button>
                <button>220</button>
              </div>
            </div>
          </div>
          <h3>Third Floor</h3>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>301</button>
                <button>302</button>
                <button>303</button>
                <button>304</button>
                <button>305</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>306</button>
                <button>307</button>
                <button>308</button>
                <button>309</button>
                <button>310</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>311</button>
                <button>312</button>
                <button>313</button>
                <button>314</button>
                <button>315</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>316</button>
                <button>317</button>
                <button>318</button>
                <button>319</button>
                <button>320</button>
              </div>
            </div>
          </div>
          <h3>Fourth Floor</h3>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>401</button>
                <button>402</button>
                <button>403</button>
                <button>404</button>
                <button>405</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>406</button>
                <button>407</button>
                <button>408</button>
                <button>409</button>
                <button>410</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>411</button>
                <button>412</button>
                <button>413</button>
                <button>414</button>
                <button>415</button>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="rooms-buttons">
                <button>416</button>
                <button>417</button>
                <button>418</button>
                <button>419</button>
                <button>420</button>
              </div>
            </div>
          </div>
      </div>
    </div>
    


    <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{URL::asset("js/main.js")}}"></script>
  </body>

</html>
