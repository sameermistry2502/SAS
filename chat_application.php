<?php
     session_start();
 ?>
<?php/*
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");

$id=$_SESSION['txtEmail'];
$q=mysql_query("SELECT * FROM `rental` WHERE `  remail` = '$id' ") or die(mysql_error());
$row=mysql_fetch_array($q);  */
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<!--chat csss  -->
    <style>
        * {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  padding: 0;
  margin: 0;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", "Roboto Light", "Segoe UI Web Light", "Segoe UI Light", "Segoe UI Web Regular", "Segoe UI", Helvetica, Arial, sans-serif;
  background: #f9f9f9;
  color: #333;
}

header {
  background: #fff;
  border-top: 4px solid #ce1126;
  border-bottom-color: #eee;
}

h1,
h2,
h3 {
  margin: 0;
  text-rendering: optimizeLegibility;
}

h1 {
  font-size: 2.4em;
  line-height: 1.6em;
  text-align: center;
  font-weight: normal;
}

h2 {
  font-size: 1.2em;
  line-height: 1.4em;
  text-align: center;
  font-weight: normal;
  text-transform: uppercase;
}

input[type=text],
button {
  -webkit-appearance: none;
  -moz-appearance: none;
  border: 1px solid #ddd;
  color: #333;
  font-size: 1em;
  padding: .7em 1em;
  margin-bottom: 1em;
  position: relative;
  top: 15px;
}

input[type=text] {
  margin-left: 85px;
  width: calc(100% - 225px);
}

button {
  background: #e6e6e6;
  text-shadow: 0 1px 0 #f3f3f3;
  margin: .5em 0 2em 0;
  width: 120px;
}

#main {
  margin: 2em 1em 1em;
}

#main > h2 {
  font-weight: normal;
  font-size: 1.2em;
  margin-bottom: 1.5em;
}

#main > p {
  color: #ce1126;
}

.chat {
  height: 85px;
  position: relative;
}

.chat i {
  font-size: 75px;
  position: absolute;
}

.output p {
  font-size: 1.2em;
  margin: 0.6em;
  position: relative;
}

.output i {
  font-size: 40px;
  position: absolute;
  top: -5px;
}

.output i + span {
  position: relative;
  margin-left: 40px;
}
/* Font Icons */

[class^="face"],
[class*=" face"] {
  font-family: 'Material Icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.face-1:before {
  content: "face";
}

.face-2:before {
  content: "favorite";
}

.face-3:before {
  content: "adb";
}

.face-4:before {
  content: "cake";
}

.face-5:before {
  content: "whatshot";
}

.face-6:before {
  content: "invert_colors";
}

.face-7:before {
  content: "stars";
}

.face-8:before {
  content: "mood_bad";
}

.face-9:before {
  content: "mood";
}

.face-10:before {
  content: "star";
}

.face-11:before {
  content: "directions_bike";
}

.face-12:before {
  content: "star_half";
}

.face-13:before {
  content: "school";
}

.color-1 {
  color: #393b79;
}

.color-2 {
  color: #6b6ecf;
}

.color-3 {
  color: #637939;
}

.color-4 {
  color: #b5cf6b;
}

.color-5 {
  color: #8c6d31;
}

.color-6 {
  color: #e7ba52;
}

.color-7 {
  color: #843c39;
}

.color-8 {
  color: #d6616b;
}

.color-9 {
  color: #7b4173;
}

.color-10 {
  color: #ce6dbd;
}
    </style>
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    ADMIN DASHBOARD
                </a>
            </div>

            <ul class="nav">
                
                 <li>
                    <a href="rental_dashboard.php">
                       <i class="pe-7s-home" aria-hidden="true"></i>
                        <p>HOME</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                     <i class="fa fa-user" aria-hidden="true"></i>
                        <p>MANAGE OWN PROFILE</p>
                    </a>
                </li>
                <li>
                    <a href="tenant_maintenance_bill.php">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <p>MAINTENANCE</p>
                    </a>
                </li>
                <li>
                    <a href="chat_application.php">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                        <p>CHAT LOOBY</p>
                    </a>
                </li>
                <!--
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                -->
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                     <a href="#">
                               <p>
                     <?php
                     if($_SESSION['txtEmail']==true)
                     {
                       echo "welcome "." ".$_SESSION['txtEmail'];
                     }
                     else
                     {
                      header('location:tenant_login.php');
                     }
                     ?>  
                               </p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        -choose-operation-
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="complain.php">Add-Complain</a></li>
                                <li class="divider"></li>
                                <li><a href="#"></a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="tlogout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tenant Profile</h4>
                            </div>
                        <div class="content">
                               
 <header>
  <h1>SAS Chatting Area</h1>
  <h2>Powered by SAS Team</h2>
</header>

<section id="main" role="main">
  <div class="chat">
    <i class="avatar" class="face12"></i>
    <input type="text" placeholder="Type your message..."> 
    <button>Send</button>
  </div>
  

  <p class="presence"></p>
  <div class="output"></div>
</section>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-md-4" hidden>
                        
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>
                
                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!-- chat js -->

    <script>
   ( function() {

  var output = document.querySelector('.output'),
    input = document.querySelector('input'),
    button = document.querySelector('button'),
    avatar = document.querySelector('.avatar'),
    presence = document.querySelector('.presence');
  var channel = 'simple-chat';

  // Assign a random avatar in random color
  avatar.className = 'face-' + ((Math.random() * 13 + 1) >>> 0) + ' color-' + ((Math.random() * 10 + 1) >>> 0);

  var p = PUBNUB.init({
    subscribe_key: 'sub-c-182105ac-0001-11e5-8fd4-0619f8945a4f',
    publish_key: 'pub-c-ce04f67b-0f26-43ce-8be2-192e9821d1a3',
    ssl: true
  });

  p.subscribe({
    channel: channel,
    callback: function(m) {
      output.innerHTML = '<p><i class="' + m.avatar + '"></i><span>' + m.text.replace(/[<>]/ig, '') + '</span></p>' + output.innerHTML;
    },
    presence: function(m) {
      if (m.occupancy > 1) {
        presence.textContent = m.occupancy + ' people online';
      } else {
        presence.textContent = 'Nobody else is online';
      }
    }
  });

  input.addEventListener('keyup', function(e) {
    (e.keyCode || e.charCode) === 13 && send()
  }, false);
 button.addEventListener('click', send, false);

  function send() {
    p.publish({
      channel: channel,
      message: {
        avatar: avatar.className,
        text: input.value
      },
      callback: function(){input.value = '';}
    });
  }

}) ();    
    </script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
   <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.23.0.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>
