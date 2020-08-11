<?php include('header2.php');?>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
</head>
<br>
<body>
<div id="services" class="services-area area-padding" ng-app="myApp" ng-controller="myCtrl">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <center><h2 class="IBM">SALES-Inquiry</h2></center><
             <span></span>
          <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                                   <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <center><img src="img/sipl.jpg" width="120" height="120"></center>
                                                </div>
                                        </div>
                                         <div class="col-md-7">
                                            <div class="form-group">
                                               <br>
                                                <center><h3>Sangath IPL <span><i class="fas fa-angle-double-right"></i></span> Sales Inquiery</h3></center>
                                                <center>401, Sangath Mall-1, Opp. Engg. College,
                                                       Sabarmati-Gandhinagar Highway,
                                                       Ahmedabad.
                                                       Tel: +123 456 789
                                                       Email: contact@sangathipl.com</center></div>
                                        </div>
                                        <div class="col-md-2" hidden>
                                          <br>
                                            <div class="form-group">
                                                
                                            </div>
                                        </div>
                                    </div>
                          <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>First Name <span style="color: red;">*</span></label>
                                                <input type="text" name="siFname" ng-model="siFname" class="form-control" size="22" placeholder="Enter First Name"  required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Middle Name <span style="color: red;">*</span></label>
                                                <input type="text" name="siMname" ng-model="siMname" class="form-control" size="22" placeholder="Enter Middle Name" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name <span style="color: red;">*</span></label>
                                                <input type="text" name="txtMLname" ng-model="siLname" class="form-control" size="22" placeholder="Enter Last Name" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email-ID <span style="color: red;">*</span></label>
                                                <input type="email" name="siEmail" ng-model="siEmail" class="form-control" size="22" placeholder="Enter Email-ID" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact-No <span style="color: red;">*</span></label>
                                                <input type="number" name="siContact" ng-model="siContact" class="form-control" size="22" placeholder="Enter Contact No" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select Project <span style="color: red;">*</span></label><br>
                                                <select name="siProject"ng-model="siProject" class="form-control">
                                                  <option value="">-SELECT-OPTION-</option>
                                                  <option value="Sangath Pure">Sangath Pure</option>
                                                  <option value="Sanagth Posh">Sanagth Posh</option>
                                                  <option value="Sangath SilverE">Sangath SilverE</option>
                                                  <option value="Sanagth Terrace">Sanagth Terrace</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message / Remark<span style="color: red;">*</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Enter Address" name="ngMsg" ng-model="ngMsg" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="row"></div>
                                   &nbsp;
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" align="left">
                                             <input type="reset" name="SALES-INQUIRY2" value="Reset" class="conbtn" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" align="right">
                                     <button type="submit" name="SALES-INQUIRY" ng-click="insertData()" class="conbtn">Submit</button>
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

        </div>
      </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script>
 var app = angular.module('myApp',[]);
 app.controller('myCtrl',function($scope,$http){    
 $scope.insertData=function(){      
 $http.post("Sales_inquiery_insert.php", {
    'siFname':$scope.siFname,
     'siMname':$scope.siMname,
    'siLname':$scope.siLname,
    'siEmail':$scope.siEmail,
    'siContact':$scope.siContact,
    'siProject':$scope.siProject,
    'ngMsg':$scope.ngMsg
       })        

 .success(function(data){
  alert(data);
  $scope.siFname = null;
  $scope.siMname  =  null;
  $scope.siLname = null;
  $scope.siEmail = null;
  $scope.siContact = null;
  $scope.siProject = null;
  $scope.ngMsg = null;
 });
    }
     });
     </script>
</body>
</html>
<?php include('footer.php'); ?>