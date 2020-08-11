<?php 
              session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>ADD-SECRETARY</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


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
                
                <li class="active">
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
                <li>
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
                    <a class="navbar-brand" href="#">Secretary Registration</a>
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
                                <li><a href="#">-OPTION-</a></li>
                                <li><a href="add_members.php">Add Member</a></li>
                                <li><a href="add_secretary.php">Add Secretary</a></li>
                                <li><a href="add_notice.php">Add Notice</a></li>
                                <li class="divider"></li>
                                <li><a href="admin_complain_dashboard.php">View Compalain Details</a></li>
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


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">ADD-SECRETARY</h4>
                            </div>
                            <div class="content">
                                <form action="sinsert.php" method="post" name="SecretaryRegistration">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>First Name <span style="color: red;">*</span></label>
                                                <input type="text" name="txtFname" class="form-control" size="22" placeholder="Enter First Name"  required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Middle Name <span style="color: red;">*</span></label>
                                                <input type="text" name="txtMname" class="form-control" size="22" placeholder="Enter Middle Name" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name <span style="color: red;">*</span></label>
                                                <input type="text" name="txtLname" class="form-control" size="22" placeholder="Enter Last Name" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email-ID <span style="color: red;">*</span></label>
                                                <input type="email" name="txtSEmail" class="form-control" size="22" placeholder="Enter Email-ID" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact-No <span style="color: red;">*</span></label>
                                                <input type="number" name="txtSNumber" class="form-control" size="22" placeholder="Enter Contact No" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender <span style="color: red;">*</span></label><br>
                                                <input type="radio" name="txtSGender" value="male" id="" size="22" required/>Male<input type="radio" name="txtSGender" value="female" id="" size="22" required/>Female
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Project-Name<span style="color: red;">*</span></label>
                                                <input type="text" placeholder="Project Name" name="txtProject" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select-Group<span style="color: red;">*</span></label>
                   <select name="txtsGroup" class="form-control">
                     <option value="">-SELECT-</option>
                     <option value="Sangath-IPL">Sangath-IPL</option>
                     <option value="Shree-Balagi">Shree-Balagi-Group</option>
                     <option value="other">Other</option>
                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>House No <span style="color: red;">*</span></label>
                                                <input type="number" placeholder="House No" name="txtHnumber" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Current Address <span style="color: red;">*</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Current Address" name="currsAdd" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Permanant Address <span style="color: red;">*</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Permanant Address" name="persAdd" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Block No <span style="color: red;">*</span></label>
                                                <input type="text" name="txtBlock" class="form-control" placeholder="Block No" size="22" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profession <span style="color: red;">*</span></label>
                         <select name="txtProfesstion" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="business">Business</option>
                            <option value="GovermentService">Govt Service</option>
                            <option value="PrivateService">Private Service</option>
                            <option value="other">Other</option>
                        </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Parking Number <span style="color: red;">*</span></label>
                                                 <input type="text" name="txtPnumber" class="form-control" size="22" required/>
                                            </div>
                                        </div>
 
                                    </div>
                              <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project type <span style="color: red;">*</span></label><br>
                                    <input type="radio" name="ProjectType" value="vila" id="" size="22" required/>Vila <input type="radio" name="ProjectType" value="banglow" id="" size="22" required/>Banglow <input type="radio" name="ProjectType" value="flat" id="" size="22" required/>Flat 
                        <input type="radio" name="ProjectType" value="Other" id="" size="22" required/>Other
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>If flat then select <span style="color: red;"></span></label>
                        <select name="txtIfFlat" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="1">1BHK</option>
                            <option value="2">2BHK</option>
                            <option value="3">3BHK</option>
                            <option value="4">4BHK</option>
                            <option value="5">5BHK</option>
                            <option value="6">6BHK</option>
                            <option value="7">7BHK</option>
                            <option value="8">8BHK</option>
                            <option value="9">More</option>
                        </select>
                                            </div>
                                        </div>
 
                                    </div>


                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City <span style="color: red;">*</span></label>
                                                <select name="txtsCity" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="Ahemedabad">Ahemedabad</option>
                            <option value="Surat">Surat</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Delhi">Delhi</option>
                        </select>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State <span style="color: red;" >*</span></label>
                        <select name="txtsState" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Tamilnadu">Tamilnadu</option>
                        </select>
                                            </div>
                                        </div>

                                    </div>

                             <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password<span style="color: red;">*</span></label>
                                                <input type="password" name="txtPassword" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirm Password<span style="color: red;">*</span></label>
                                                <input type="password" name="txtcPassword" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profile<span style="color: red";>*</span></label>
                                                <input type="file" name="txtsProfile" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <td><input type="reset" name="SecretaryRegister1" value="Reset" class="btn btn-info btn-fill" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                     <button type="submit" name="SecretaryRegister" class="btn btn-info btn-fill pull-right">ADD NOW</button>
                                    <div class="clearfix"></div>
                                        </div>
                                    </div>
                                   </div>
 
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" hidden>
                        <div class="card card-user">
                                    <?php 

                           $fname=$_POST['txtFname'];
                           $mname=$_POST['txtMname'];
                           $lname=$_POST['txtLname'];
                           $semail=$_POST['txtSEmail'];
                           $scon=$_POST['txtSNumber'];
                           $sgender=$_POST['txtSGender'];
                           $sproject=$_POST['txtProject'];
                           $sgrp=$_POST['txtsGroup'];
                           $shouseno=$_POST['txtHnumber'];
                           $sbno=$_POST['txtBlock'];
                           $scurradd=$_POST['currsAdd'];
                           $speradd=$_POST['persAdd'];
                           $sprofession=$_POST['txtProfesstion'];
                           $sparkingno=$_POST['txtPnumber'];
                           $sprojtype=$_POST['ProjectType'];
                           $sifflat=$_POST['txtIfFlat'];
                           $city=$_POST['txtsCity'];
                           $state=$_POST['txtsState'];
                           $spass=$_POST['txtPassword'];
                           $sprofile=$_POST['txtsProfile'];

                          $con = mysqli_connect('localhost','root','','sas_db');

                           $quy = "INSERT INTO `secretary`(`fname`, `mname`, `lname`, `semail`, `sconact_no`, `sgender`, `sproject`, `sgroup`, `shouse_no`, `sblock`, `scurr_add`, `sper_add`, `s_profession`, `sparkingno`, `property_type`, `sif_flat`, `city`, `state`, `password`, `sprofile`) VALUES ('$fname','$mname','$lname','$semail','$scon','$sgender','$sproject','$sgrp','$shouseno','$sbno','$scurradd','$speradd','$sprofession','$sparkingno','$sprojtype','$sifflat','$city','$state','$spass','$sprofile')";
                          $run = mysqli_query($con,$quy);

                          if ($run == TRUE) 
                          { ?>
                            <script>alert('Secretary SuccessFully Registered.........!');</script>
                           
                         <?php }
                          else
                          {  ?>
                             <script>alert('Error! In the Registration');</script>
                          
                        <?php  }  
                        ?>
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

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>
