<?php 
              session_start();
?>
<?php
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");
  $q="select * from secretary";
  $resource = mysql_query($q);
  $count = mysql_num_rows($resource);
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Manage Secretary</title>

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
                    <a href="dashboard.php">
                       <i class="pe-7s-home" aria-hidden="true"></i>
                        <p>HOME</p>
                    </a>
                </li>  
               <li>
                    <a href="user.php">
                       <i class="fa fa-user" aria-hidden="true"></i>
                        <p>MANAGE OWN PROFILE</p>
                    </a>
                </li>
                <li class="active">
                    <a href="view_all_members.php">
                       <i class="fa fa-cog" aria-hidden="true"></i>
                        <p>HANDLE SECRATARY</p>
                    </a>
                </li>
                <li>
                    <a href="typography.php">
                        <i class="fa fa-inr" aria-hidden="true"></i>
                        <p>TRACK SOCIETY ACCOUNT</p>
                    </a>
                </li>
                <li>
                    <a href="admin_maintenance_bill.php">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <p>MAINTENANCE</p>
                    </a>
                </li>
                <li>
                    <a href="view_societydata.php">
                         <i class="fa fa-database" aria-hidden="true"></i>
                        <p>MANAGE SOCIETY DATA</p>
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
                    <a class="navbar-brand" href="#">Secretary-Record</a>
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
                       echo ""."  ".$_SESSION['txtEmail'];
                     }
                     else
                     {
                      header('location:alogin.php');
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
                                <li><a href="#"></a></li>
                                <li><a href="add_members.php">Add Member</a></li>
                                <li><a href="add_secretary.php">Add Secretary</a></li>
                                <li><a href="add_notice.php">Add Notice</a></li>
                                <li class="divider"></li>
                                <li><a href="admin_complain_dashboard.php">View Compalain Details</a></li>
                                <li><a href="view_all_inquiery.php">View Inquiery</a></li>
                                <li><a href="View_all_RENT_Requirement_Inquiery.php">View Rental Inquiery</a></li>
                                <li><li><a href="view_feedback.php">View feedback</a></li></li>
                              </ul>
                        </li>
                        <li>
                            <a href="alogout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content" ng-app="myApp" ng-controller="myCtrl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">MANAGE SECRETARY RECORD</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <div id="tablediv">
                                <table class="table table-hover">
                                    <thead>

                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Serial-No</th>
                                        <th>First-Name</th>
                                        <th>Middle-Name</th>
                                        <th>Last</th>
                                        <th>Email</th>
                                        <th>Contact-NO</th>
                                        <th>Gender</th>
                                        <th>Project</th>
                                        <th>Group</th>
                                        <th>House NO</th>
                                        <th>Block-No</th>
                                        <th>Current Address</th>
                                        <th>Permenant Address</th>
                                        <th>Profession</th>
                                        <th>Parking No</th>
                                        <th>Property Type</th>
                                        <th>Flat-Info</th>
                                        <th>city</th>
                                        <th>state</th>
                                        <th>password</th>
                                        <th>sprofile</th>
                                    </thead>
                                       <?php while ($row = mysql_fetch_row($resource)) 
                 { 
            ?>
                                    <tbody>
                                        <tr>  
                                          <td class="td-actions text-right">
                                             <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <a href="Secretary_Edit.php?sid=<?php echo $row[0] ?>" Onclick="return ConfirmUpdate()"><i class="fa fa-edit"></i></a>
                                             </button>   
                                            </td>
                                        	<td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                               <a href="admin_sec_del.php?sid=<?php echo $row[0]; ?>" Onclick="return ConfirmDelete();"> 
                                                <i class="fa fa-times"></i>
                                               </a>
                                            </button>
                                         </td>
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
              <td><?php echo $row[17]; ?></td>
              <td><?php echo $row[18]; ?></td>
              <td><?php echo $row[19]; ?></td>
              <td><?php echo $row[20]; ?></td>
          </tbody>
          <?php } ?>
                                        	
                                        </tr>
                                    </tbody>
                                </table>
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
  <script type="text/javascript">
    
  function ConfirmDelete()
  {
   var x =confirm("Are you Sure You want to delete?");
   if(x)
    return true;
  else
    return false;
}

  function ConfirmUpdate()
  {
   var x =confirm("Are you Sure You want to Update?");
   if(x)
    return true;
  else
    return false;
}
  </script>

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
