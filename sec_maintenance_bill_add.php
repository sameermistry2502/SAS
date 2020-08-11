
<?php 
              session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="img/favicon.png">
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
                    SECRETARY DASHBOARD
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
            


        <div class="content" ng-app="myApp" ng-controller="myCtrl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">MAINTENANCE -BILL GENERATE</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Bill Title <span style="color: red;">*</span></label>
                                                <input type="text" name="txtBtitle" ng-model="txtBtitle" class="form-control" size="22" placeholder="Enter First Name"  required/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>From Date <span style="color: red;">*</span></label>
                                                <input type="date" name="txtFdate" ng-model="txtFdate" class="form-control" size="22" placeholder="Enter Middle Name" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Due Date <span style="color: red;">*</span></label>
                                                <input type="Date" name="txtDuedate" ng-model="txtDuedate" class="form-control" size="22" placeholder="Enter Last Name" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description<span style="color: red;">*</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Home Address" ng-model="txtBdesc" name="txtBdesc" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bill Month<span style="color: red;">*</span></label>
                                        <select class="form-control" name="txtbMonth" ng-model="txtbMonth">
                                            <option value=''>--Select Month--</option>
                                            <option selected value='Janaury'>Janaury</option>
                                            <option value='February'>February</option>
                                            <option value='March'>March</option>
                                            <option value='April'>April</option>
                                            <option value='May'>May</option>
                                            <option value='June'>June</option>
                                            <option value='July'>July</option>
                                            <option value='August'>August</option>
                                            <option value='September'>September</option>
                                            <option value='October'>October</option>
                                            <option value='November'>November</option>
                                            <option value='December'>December</option>
                                        </select> 
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Society Name<span style="color: red;">*</span></label>
                                                <input type="text" name="txtSocbname" ng-model="txtSocbname" class="form-control" placeholder="Enter Society Name" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Actual Amount <span style="color: red;">*</span></label>
                                                <input type="number" ng-model="txtAdetails" name="txtAdetails" class="form-control" placeholder="Enter Actual Amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6"><label>TAX-1<span style="color: red;">*</span></label></div>
                                            <div class="col-md-6">
                                                <input type="number" placeholder="Enter Text" ng-model="txtText1" name="txtText1" class="form-control"  size="22" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6"><label>TAX-2<span style="color: red;">*</span></label></div>
                                            <div class="col-md-6">
                                                <input type="number" placeholder="EnterAnother Text" name="txtText2" ng-model="txtText2" class="form-control" size="22" required/>
                                            </div>
                                        </div>
                                    </div>
                                  <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6"><label>Discount<span style="color: red;">*</span></label></div>
                                            <div class="col-md-6">
                                               <input type="number" placeholder="Enter Discount Amount" name="txtDisbillamt" ng-model="txtDisbillamt" class="form-control" size="22" required/>                                               
                                            </div>
                                        </div>
                                    </div>


                             <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Total Amount<span style="color: red;">*</span></label>
                                                <input type="number" ng-model="txtFfinalAmt" name="txtFfinalAmt" class="form-control" value="{{txtFfinalAmt = txtAdetails + txtText1 + txtText2 - txtDisbillamt}}" size="22" required/>
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
                                     <button type="submit" name="MemberRegister" class="btn btn-info btn-fill pull-right" ng-click="insertData()">GENERATE</button>
                                    <div class="clearfix"></div>
                                        </div>
                                    </div>
                                   </div>
 
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="heading">
                                <h4 class="title" align="center">Bill Look</h4>
                            </div>
                            <div class="content">
                             
                               <div class="row">
                                   <div class="col-md-6"><label>Bill Title <span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtBtitle}}<h6></div>
                               </div>
                              <div class="row">
                                   <div class="col-md-6"><label>Bill From <span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtFdate}}</h6></div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6"><label>Bill Due <span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtDuedate}}</h6></div>
                               </div>
                              <div class="row">
                                   <div class="col-md-6"><label>Bill Description<span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtBdesc}}</h6></div>
                               </div>
                            
                            <div class="row">
                                   <div class="col-md-6"><label>Bill Month<span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtbMonth}}</h6></div>
                               </div>
                              <div class="row">
                                   <div class="col-md-6"><label>Bill Society Name<span style="color: blue;">:</span></label><h6 style="color: blue">{{txtSocbname}}</h6></div>
                                   <div class="col-md-6"></div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6"><label>Bill Amount<span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtAdetails}}</h6></div>
                               </div>
                              <div class="row">
                                   <div class="col-md-6"><label>Bill Text1<span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtText1}}</h6></div>
                               </div>
                             <div class="row">
                                   <div class="col-md-6"><label>Bill Text2<span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtText2}}</h6></div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6"><label>Bill Discount<span style="color: blue;">:</span></label></div>
                                   <div class="col-md-6"><h6 style="color: blue">{{txtDisbillamt}}</h6></div>
                               </div>
                               <div class="row">
                                   <div class="col-md-6"><label>Total Amount<span style="color: blue;">:</span></label><h6 style="color: blue">{{txtAdetails + txtText1 + txtText2 - txtDisbillamt}}</h6></div>
                                   <div class="col-md-6"></div>
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
    <!--   AngularJs JS Files   -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script>
 var app = angular.module('myApp',[]);
 app.controller('myCtrl',function($scope,$http){    
 $scope.insertData=function(){      
 $http.post("Bill_generate_insert.php", {
    'txtBtitle':$scope.txtBtitle,
     'txtBdesc':$scope.txtBdesc,
    'txtFdate':$scope.txtFdate,
    'txtDuedate':$scope.txtDuedate,
    'txtbMonth':$scope.txtbMonth,
    'txtSocbname':$scope.txtSocbname,
    'txtAdetails':$scope.txtAdetails,
    'txtText1':$scope.txtText1,
    'txtText2':$scope.txtText2,
    'txtDisbillamt':$scope.txtDisbillamt,
    'txtFfinalAmt':$scope.txtFfinalAmt
       })        

 .success(function(data){
  alert(data);
  $scope.txtBtitle = null;
  $scope.txtBdesc  =  null;
  $scope.txtFdate = null;
  $scope.txtDuedate = null;
  $scope.txtbMonth = null;
  $scope.txtSocbname = null;
  $scope.txtAdetails = null;
  $scope.txtText1 = null;
  $scope.txtText2 = null;
  $scope.txtDisbillamt = null;
  $scope.txtFfinalAmt = null;
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
