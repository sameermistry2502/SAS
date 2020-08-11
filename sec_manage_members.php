<?php 
              session_start();
?>
<?php
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");
    $q="SELECT * FROM `member`";
  $resource = mysql_query($q);
  $count = mysql_num_rows($resource);
  //---------------------------------
   $q2="SELECT * FROM `notice`";
  $resource2 = mysql_query($q2);
  $count2 = mysql_num_rows($resource2);
  //------------------------------------
  $q3="SELECT * FROM `rental`";
  $resource3= mysql_query($q3);
  $count3= mysql_num_rows($resource3);
 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Secretary Dashboard Home</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

        <!-- Table  CSS     -->
     <link rel="stylesheet" href="css/tablestyle.css">
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="img/favicon.png">




</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="sec_dashboard.php" class="simple-text">
                    SECRETARY DASHBOARD
                </a>
            </div>

            <ul class="nav">
                 <li>
                    <a href="sec_dashboard.php">
                       <i class="pe-7s-home" aria-hidden="true"></i>
                        <p>HOME</p>
                    </a>
                </li>
                <li>
                    <a href="sec_user.php">
                     <i class="fa fa-user" aria-hidden="true"></i>
                        <p>MANAGE OWN PROFILE</p>
                    </a>
                </li>
                 <li class="active">
                    <a href="sec_manage_members.php">
                     <i class="fas fa-users" aria-hidden="true"></i>
                        <p>MANAGE MEMBER</p>
                    </a>
                </li>

                <li>
                    <a href="sec_society_all_members_add.php">
                        <i class="pe-7s-add-user" aria-hidden="true"></i>
                        <p>INSERT</p>
                    </a>
                </li>
                <li>
                    <a href="sec_manage_manintenance.php">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <p>MAINTENANCE</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost:90/chat/index.php" target="_blank">
                    
                        <i class="fas fa-comments" aria-hidden="true"></i>
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
                    <a class="navbar-brand" href="#">MANAGE SOCIETY DATA</a>
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
                      header('location:secretary_login.php');
                     }
                     ?>  
                               </p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        -Choose-Operation-
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="sec_notice_add.php">Add Notice</a></li>
                                <li><a href="sec_maintenance_bill_add.php">Add Maintenance Bill</a></li>
                                <li class="divider"></li>
                                <li><a href="sec_view_complain.php">View Complain Details</a></li>
                                <li><a href="sec_view_rent_Inquiery.php">View Rental Inuiery</a></li>
                                <li><a href="sec_view_sales_Inquiery.php">View Sales Inquiery</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="slogout.php">
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title">Handle Member</h2>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <div id="tablediv">
                                <table class="table table-hover table-striped">
                                    <thead>
              <th>Edit</th>
              <th>Delete</th>
              <th>Sr No</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Lasat Name</th>
              <th>Email</th>
              <th>Contact NO</th>
              <th>Gender</th>
              <th>House No</th>
              <th>Block No</th>
              <th>Address</th>
              <th>Profession</th>
              <th>Parking NO</th>
              <th>Project Type</th>
              <th>Flat Info</th>
              <th>Project Name</th>
              <th>City</th>
              <th>State</th>
              <th>Profile</th>
                                    </thead>
                      <?php while ($row = mysql_fetch_row($resource)) 
                 { 
            ?>
                                    <tbody>
                                       <tr>
                                           <td>
                                               <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                             </button>  
                                           </td>
                                           <td>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                               <a href="admin_member_del.php?mid=<?php echo $row[0]; ?>" Onclick="return ConfirmDelete();"> 
                                                <i style="color: red;" class="fa fa-times"></i>
                                               </a>
                                            </button>
                                           </td>
              <td><?php echo $row[0]; ?></td>
              <td><?php echo $row[1]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td><?php echo $row[3]; ?></td>
              <td><?php echo $row[4]; ?></td>
              <td><?php echo $row[5]; ?></td>
              <td><?php echo $row[6]; ?></td>
              <td><?php echo $row[7]; ?></td>
              <td><?php echo $row[8]; ?></td>
              <td><?php echo $row[9]; ?></td>
              <td><?php echo $row[10]; ?></td>
              <td><?php echo $row[11]; ?></td>
              <td><?php echo $row[12]; ?></td>
              <td><?php echo $row[13]; ?></td>
              <td><?php echo $row[14]; ?></td>
              <td><?php echo $row[15]; ?></td>
              <td><?php echo $row[16]; ?></td>
              <td><?php echo $row[18]; ?></td>
                                       </tr>
                                    </tbody>
                                     <?php } ?>
                                </table>
                             </div>
                            </div>
                        </div>
                    </div>


                  <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h2 class="title">Handle Tenant</h2>
                                <p class="category">-</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <div class="tablediv">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Sr No</th>
                                        <th>name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Profession</th>
                                        <th>House No</th>
                                        <th>Blocak No</th>
                                        <th>Society</th>
                                        <th>Address</th>
                                        <th>Agreement Start Date</th>
                                        <th>Agreement Due Date</th>
                                        <th>Tenent rate</th>
                                        <th>Specici Info about Tenant</th>
                                    </thead>
               <?php while ($row3 = mysql_fetch_row($resource3)) 
                 { 
               ?>
                                    <tbody>
                                      <tr>
                                          <td class="td-actions text-right">
                                             <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                             </button>   
                                            </td>
                                            <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                               <i class="fa fa-times"></i>
                                            </button>
                                            </td>
                                         
                                       </td>   
              <td><?php echo $row3[0]; ?></td>
              <td><?php echo $row3[1]; ?></td>
              <td><?php echo $row3[2]; ?></td>
              <td><?php echo $row3[3]; ?></td>
              <td><?php echo $row3[4]; ?></td>
              <td><?php echo $row3[5]; ?></td>
              <td><?php echo $row3[6]; ?></td>
              <td><?php echo $row3[7]; ?></td>
              <td><?php echo $row3[8]; ?></td>
              <td><?php echo $row3[10]; ?></td>
              <td><?php echo $row3[11]; ?></td>
              <td><?php echo $row3[12]; ?></td>
              <td><?php echo $row3[13]; ?></td>
                                      </tr>
                                    </tbody>
                                      <?php } ?>
                                </table>
                               </div>
                            </div>
                        </div>
                    </div>







                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h2 class="title">Handle Notice</h2>
                                <p class="category">-</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <div class="tablediv">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Sr No</th>
                                    	<th>News Title</th>
                                    	<th>News date</th>
                                    	<th>News Description</th>
                                    	<th>News Type</th>
                                    </thead>
               <?php while ($row2 = mysql_fetch_row($resource2)) 
                 { 
               ?>
                                    <tbody>
                                      <tr>
                                          <td class="td-actions text-right">
                                             <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                             </button>   
                                            </td>
                                            <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                               <i class="fa fa-times"></i>
                                            </button>
                                            </td>
                                         
                                       </td>   
              <td><?php echo $row2[0]; ?></td>
              <td><?php echo $row2[1]; ?></td>
              <td><?php echo $row2[2]; ?></td>
              <td><?php echo $row2[3]; ?></td>
              <td><?php echo $row2[4]; ?></td>
                                      </tr>
                                    </tbody>
                                      <?php } ?>
                                </table>
                               </div>
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
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="sas_team.php">SAS Team</a>

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


</html>
