<?php
              session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Registrations</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

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
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                     Secratary dashboard
                </a>
            </div>

 
            <ul class="nav">
                 <li class="active">
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
                 <li>
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
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                        <p>CHAT LOOBY</p>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Society Member</h4>
                            </div>
                            <div class="content">
                                <form action="sec_minsert.php" method="post" name="MemberRegistration">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>First Name <span style="color: red;">*</span></label>
                                                <input type="text" name="txtMFname" class="form-control" size="22" placeholder="Enter First Name"  required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Middle Name <span style="color: red;">*</span></label>
                                                <input type="text" name="txtMMname" class="form-control" size="22" placeholder="Enter Middle Name" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name <span style="color: red;">*</span></label>
                                                <input type="text" name="txtMLname" class="form-control" size="22" placeholder="Enter Last Name" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email-ID <span style="color: red;">*</span></label>
                                                <input type="email" name="txtEmail" class="form-control" size="22" placeholder="Enter Email-ID" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact-No <span style="color: red;">*</span></label>
                                                <input type="number" name="txtMcontact" class="form-control" size="22" placeholder="Enter Contact No" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender <span style="color: red;">*</span></label><br>
                                                <input type="radio" name="txtMGender" value="male" id="" size="22" required/>Male<input type="radio" name="txtMGender" value="female" id="" size="22" required/>Female
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>House No <span style="color: red;">*</span></label>
                                                <input type="number" name="txtMhouseno" class="form-control" size="22" placeholder="House No" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Block No <span style="color: red;">*</span></label>
                                                <input type="text" name="txtMBnumber" class="form-control" size="22" placeholder="Block No" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profession <span style="color: red;">*</span></label>
                                                <select name="txtMProfession" class="form-control">
                                                  <option value="">-SELECT-</option>
                                                  <option value="business">Business</option>
                                                  <option value="GovermentService">Govt Service</option>
                                                  <option value="PrivateService">Private Service</option>
                                                  <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address <span style="color: red;">*</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Home Address" name="txtAddress" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Parking Number<span style="color: red;">*</span></label>
                                                <input type="text" name="txtMPnumber" class="form-control" size="22" placeholder="Parking No" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Project type <span style="color: red;">*</span></label><br>
                                                 <input type="radio" class="" name="ProjectType" value="vila" id="" size="22" required/>Vila &nbsp;<input type="radio" name="ProjectType" class="" value="banglow" id="" size="22" required/>Banglow &nbsp; <br><input type="radio" name="ProjectType" value="flat" size="22" required/>Flat
                        <input type="radio" name="ProjectType" class="" value="Other" id="" size="22" required/>Other &nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>If flat then select <span style="color: red;">*</span></label>
                             <select name="txtMflat" class="form-control">
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
                    <option value="10">NA</option>
                        </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Project Name<span style="color: red;">*</span></label>
                                                <input type="text" placeholder="Project Name" name="txtProjectname" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City <span style="color: red;">*</span></label>
                                                <select name="txtMcity" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="Ahemedabad">Ahemedabad</option>
                            <option value="Surat">Surat</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Delhi">Delhi</option>
                        </select>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State <span style="color: red;" >*</span></label>
                        <select name="txtMstate" class="form-control">
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
                                                <input type="password" name="txtMpass" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirm Password<span style="color: red;">*</span></label>
                                                <input type="password" name="txtMcpass" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profile<span style="color: red";>*</span></label>
                                                <input type="file" name="txtMprofile" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <td><input type="reset" name="MemberRegister1" value="Reset" class="btn btn-info btn-fill" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                     <button type="submit" name="MemberRegister" class="btn btn-info btn-fill pull-right">ADD NOW</button>
                                    <div class="clearfix"></div>
                                        </div>
                                    </div>
                                   </div>
 
                                </form>
                            </div>
                        </div>
                    </div>
                <div ng-app="myApp" ng-controller="myCtrl">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Society Tenant</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Tenant Name <span style="color: red;">*</span></label>
                                                <input type="text" ng-model="tName" class="form-control" size="22" placeholder="Enter Name"  required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tenant Email<span style="color: red;">*</span></label>
                                                <input type="email" ng-model="tEmail" class="form-control" size="22" placeholder="Enter Email" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tenant Contact<span style="color: red;">*</span></label>
                                                <input type="number" ng-model="tContact" class="form-control" size="22" placeholder="Enter Conatct No" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tenant-Profession<span style="color: red;">*</span></label>
                                                <select ng-model="tProffesion" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Goverment Service">Goverment Service</option>
                                                    <option value="Private Service">Private Service</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tenant House-No <span style="color: red;">*</span></label>
                                                <input type="text" ng-model="tThno" class="form-control" size="22" placeholder="Enter House No" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tenant Block-NO <span style="color: red;">*</span></label><br>
                                                <input type="text" ng-model="tBlockno" class="form-control" size="22" placeholder="Enter Block No" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tenant Society Name<span style="color: red;">*</span></label>
                                                <input type="text" ng-model="tSocName" class="form-control" size="22" placeholder="Enter Society Name" required/>
                                            </div>
                                        </div>
                                      <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tenant Resident Address<span style="color: red;">*</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Enter Address" ng-model="tresAddress" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   <!-- -->
                       
                                   <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password<span style="color: red;">*</span></label>
                                                <input type="password" ng-model="txtPass" class="form-control" size="22" placeholder="Enter Password" required/>
                                            </div>
                                        </div>
                                      <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirm Password<span style="color: red;">*</span></label>
                                                <input type="password" class="form-control" size="22" placeholder="Enter Confirm Password" required/>
                                            </div>
                                        </div>
                                    </div>

                                   <!-- --> 

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tenant Aggremet Start Date<span style="color: red;">*</span></label>
                                                <input type="date" ng-model="taggStartdate" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tenant Due Start Date<span style="color: red;">*</span></label>
                                                <input type="date" ng-model="taggDuedate" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tenant Rate <span style="color: red;">*</span></label>
                                                <input type="text" ng-model="tRate" class="form-control" placeholder="Enteter Renat Rate" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tenant Specific Information<span style="color: red;">*</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Enter Address" ng-model="tSpecinfo" required></textarea>
                                            </div>
                                        </div>


                                    </div>

                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <td><input type="reset" name="RentInsert1" value="RESET" class="btn btn-info btn-fill" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                     <button type="submit" name="RentInsert" class="btn btn-info btn-fill pull-right "  ng-click="insertData()">ADD NOW</button>
                                    <div class="clearfix"></div>
                                        </div>
                                    </div>
                                   </div>
 
                                </form>
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
     
         <!--   AngularJs JS Files   -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script>
 var app = angular.module('myApp',[]);
 app.controller('myCtrl',function($scope,$http){    
 $scope.insertData=function(){      
 $http.post("rental_insert_op.php", {
    'tName':$scope.tName,
     'tEmail':$scope.tEmail,
    'tContact':$scope.tContact,
    'tProffesion':$scope.tProffesion,
    'tThno':$scope.tThno,
    'tBlockno':$scope.tBlockno,
    'tSocName':$scope.tSocName,
    'tresAddress':$scope.tresAddress,
    'txtPass':$scope.txtPass,
    'taggStartdate':$scope.taggStartdate,
    'taggDuedate':$scope.taggDuedate,
    'tRate':$scope.tRate,
    'tSpecinfo':$scope.tSpecinfo,
       })        

 .success(function(data){
  alert(data);
  $scope.tName = null;
  $scope.tEmail  =  null;
  $scope.tContact = null;
  $scope.tProffesion = null;
  $scope.tThno = null;
  $scope.tBlockno = null;
  $scope.tSocName = null;
  $scope.tresAddress = null;
  $scope.txtPass  =  null;
  $scope.taggStartdate = null;
  $scope.taggDuedate = null;
  $scope.tRate = null;
  $scope.tSpecinfo = null;
 });
    }
     });
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
