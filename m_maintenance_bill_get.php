<?php
              session_start();
?>
<?php
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");
$q =  mysql_query("SELECT * FROM `maintenance_bill`");

if (!$q) {
    echo "Could not successfully run query ($q) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($q) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}


 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>MEMBER</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sniglet">
    <style>
      .IBM{
        font-family: 'Sniglet', serif;
        font-size: 25px;
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

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                   MEMBER DASHBOARD
                </a>
            </div>

            <ul class="nav">
             <li>
                    <a href="mdashboard.php">
                        <i class="pe-7s-home" aria-hidden="true"></i>
                        <p>HOME</p>
                    </a>
             </li>   
             <li>
                    <a href="muser.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>MANAGE OWN PROFILE</p>
                    </a>
                </li>

                <li>
                    <a href="mdashboard.php">
                        <i class="pe-7s-add-user" aria-hidden="true"></i>
                        <p>REGISTRATION</p>
                    </a>
                </li>
                 <li  class="active">
                    <a href="m_maintenance_bill_get.php">
                        <i class="pe-7s-cash" aria-hidden="true"></i>
                        <p>MAINTENANCE</p>
                    </a>
                </li>

               
                <li>
                    <a href="mvisitor.php">
                         <i class="fa fa-binoculars" aria-hidden="true"></i>
                        <p>VISITOR TRACKING</p>
                    </a>
                </li>

                <li>
                    <a href="mnotifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>NOTIFICATION</p>
                    </a>
                </li>    
                 <li>
                    <a href="http://localhost:90/chat/">
                         <i class="fa fa-comments-o" aria-hidden="true"></i>
                        <p>CHAT LOBBY</p>
                    </a>
                </li>
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
                    <a class="navbar-brand" href="#">Dashboard</a>
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
                                    <b class="caret hidden-lg hidden-md"></b>
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
                       echo ""."  ".$_SESSION['txtEmail'];
                     }
                     else
                     {
                      header('location:Member_login.php');
                     }
                   ?> 
                               </p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="mlogout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
 

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
  <?php 
    
     while ($row = mysql_fetch_assoc($q)) 
     {


    ?>
                            <div class="header">
                                <h4 class="title">MAINTENANCE BILL</h4>
                                <p class="category">For  -<?php echo $row["bill_title"]; ?></p>
                            </div>
                            <div class="content">
                               
                         <div class="row">
                             <div class="col-md-6"> 
                    
                                 <h5 class="IBM">MONTH</h5> 
                                 <h5 class="IBM">SOCIETY NAME</h5> 
                                 <h5 class="IBM">FROM-DATE</h5> 
                                 <h5 class="IBM">DUE DATE</h5> 
                                 <h5 class="IBM">Actual Amount</h5> 
                                 <h5 class="IBM">Tax1</h5> 
                                 <h5 class="IBM">Tax2</h5>
                                 <h5 class="IBM">Discount</h5> 
                                 <h5 class="IBM">Total Amount</h5>                               
                             </div>
                             <div class="col-md-6">
                                 <h5 class="IBM" style="color: blue;"><?php echo $row["bill_month"]; ?></h5>
                                 <h5 class="IBM" style="color: blue;"><?php echo $row["bill_society_name"]; ?></h5>
                                 <h5 class="IBM" style="color: blue;"><?php echo $row["bill_fdate"]; ?></h5>
                                 <h5 class="IBM" style="color: blue;"><?php echo $row["bill_ddate"]; ?></h5>

                                 <h5 class="IBM" style="color: red;"><?php echo $row["bill_amount"]; ?></h5>
                                 <h5 class="IBM" style="color: red;"><?php echo $row["bill_text_amount"]; ?></h5>
                                 <h5 class="IBM" style="color: red;"><?php echo $row["bill_text2_amount"]; ?></h5>
                                 <h5 class="IBM" style="color: red;"><?php echo $row["bill_discount_amount"]; ?></h5>
                                 <hr>
                                 <h1 style="color: green"><?php echo $row["bill_total_amount"]; ?></h1>
                                <hr>
                                <p><?php echo $row["bill_description"]; ?></p>
                             </div>
                         </div>        

                        <?php 

                        //mysql_free_result($q);

                    }

                         ?>  
                           <div class="row">
                                    <div class="col-md-6">
                                     <!--   <div class="form-group">
                                            <button type="submit" name="MemberRegister" class="btn btn-info btn-fill pull-right">PROCEED TO PAY</button>
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <a href="https://jester-31d03.firebaseapp.com/" class="btn btn-info btn-fill pull-right">PROCEED TO PAY
                                         </a>
                                        </div>
                                    </div>
                          </div>
    <!-- -->
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

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	jquery.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
