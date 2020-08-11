<?php 
              session_start();
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
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
                    <a class="navbar-brand" href="#">Member Registration</a>
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
                                        -ADD-
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">-OPTION-</a></li>
                                <li><a href="#">Add Member</a></li>
                                <li><a href="#">Add Secretary</a></li>
                                <li><a href="add_notice.php" class="active">Add Notice</a></li>
                                <li class="divider"></li>
                                <li><a href="#">View Compalain Details</a></li>
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
                                <h4 class="title">ADD-MEMBER</h4>
                            </div>
                            <div class="content">
                                <form action="notice_insert.php" method="post" name="MemberRegistration">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Notice-Title<span style="color: red;">*</span></label>
                                                <input type="text" name="txtNtitle" class="form-control" size="22" placeholder="Notice Title" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date<span style="color: red;">*</span></label>
                                                <input type="date" name="txtNdate" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Type<span style="color: red;" >*</span></label>
                       <select name="txtNtype" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="Festival">Festival</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Rules">Rules & Regulation</option>
                            <option value="General">General</option>
                        </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Notice-Description<span style="color: red;">*</span>
                                                </label>
                                                <textarea rows="5" class="form-control" placeholder="Notice Description Address" name="txtNdesc" required></textarea>
                                            </div>
                                        </div>
                                    </div>


                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <td><input type="reset" name="Notice1" value="Reset" class="btn btn-info btn-fill" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                     <button type="submit" name="Notice" class="btn btn-info btn-fill pull-right">ADD NOW</button>
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

                           $ntitle=$_POST['txtNtitle'];
                           $ndate=$_POST['txtNdate'];
                           $ndesc=$_POST['txtNdesc'];
                           $ntype=$_POST['txtNtype'];
                          $con = mysqli_connect('localhost','root','','sas_db');

                           $quy = "INSERT INTO `notice`(`ntitle`, `ndate`, `ndesc`, `ntype`) VALUES ('$ntitle','$ndate','$ndesc','$ntype')";
                           
                          $run = mysqli_query($con,$quy);

                          if ($run == TRUE) 
                          {?>
                             <script>alert('Notice Added on Notice-Board.........');</script>
                            echo "";
                         <?php
                             
                          } 
                          else
                          {?>
                             
                             <script>alert('Error! In Insertion operation');</script>
                            
                          <?php }  
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
