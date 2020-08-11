<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Society Automation System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- Font API  -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sniglet">
    <style>
      .IBM{
        font-family: 'Sniglet', serif;
        font-size: 25px;
      }
    </style>
  <!-- Libraries CSS Files -->

  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="css/social_css.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <style>
     .dropdown-menu{
      background-color: #595959;
      color: solid white;
     }
     .fa-angle-right{
        color: red;
     }
     .conbtn{
        background: transparent;
        border: none;
        outline: none;
        color: #fff;
        background:  #4dd2ff;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 30px; 
        height: 40px;
        width: 150px;
        font-size: 18px solid;
     }
      .com{
      border-radius: 6px;
      height: 40px;
      width: 280px;
    }
    .select{
      border-radius: 6px;
      width: 280px;
      height: 40px;
    }
    #combbrief{
      border-radius: 6px;
    }  
         .img1{
      height: 400px;
      width: 900px
    }
  </style>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--   -->
</head>

<body data-spy="scroll" data-target="#navbar-example">
                  <?php 
                       if(isset($_POST['add'])){
                           $name=$_POST['txtName'];
                           $email=$_POST['txtEmail'];
                           $subject=$_POST['txtSubject'];
                           $msg=$_POST['txtMessage'];

                          $con = mysqli_connect('localhost','root','','sas_db');

                           $quy = "INSERT INTO `contact_us`(`con_name`, `con_email`, `con_sub`, `com_msg`) VALUES ('$name','$email','$subject','$msg')";
                          $run = mysqli_query($con,$quy);

                          if ($run == TRUE) 
                          {  

                    ?>
                            <script type="text/javascript">alert('contact details added');</script>
                            
                    <?php

                          }
                          else
                          {  

                     ?>
                            <script type="text/javascript">alert('Error! In the Insertion');</script>
                            
                  <?php 

                       } 

                  }
                  ?>
                  <!--Feedback Insert code -->
                                    <?php 
                       if(isset($_POST['submit'])){
                           $name=$_POST['feedUser'];
                           $email=$_POST['feedEmail'];
                           $rate=$_POST['txtRate'];
                           $subinfo=$_POST['txtSyS'];
                           $msg=$_POST['txtFEEDsys'];

                          $con = mysqli_connect('localhost','root','','sas_db');

                           $quy = "INSERT INTO `feedback`(`feed_name`, `feed_email`, `feed_rate`, `feed_info`, `msg`) VALUES ('$name','$email','$rate','$subinfo','$msg')";
                          $run = mysqli_query($con,$quy);

                          if ($run == TRUE) 
                          {  

                    ?>
                            <script type="text/javascript">alert('YOUR FEEDBACK IS SUBMITED SUCCESSFULLY !Thank You');</script>
                            
                    <?php

                          }
                          else
                          {  

                     ?>
                            <script type="text/javascript">alert('Error! In the Insertion');</script>
                            
                  <?php 

                       } 

                  }
                  ?>
                  <!-- -->
  <!-- <div id="preloader"></div> -->
  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo IBM" href="index.php">
                  
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <h1 class="IBM"><span>Society</span> Automation System</h1>
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll IBM" href="index.php">HOME</a>
                  </li>
                  <li>
                    <a class="page-scroll IBM" href="#about">ABOUT</a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle IBM" data-toggle="dropdown" href="#">LOGIN AS<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a class="page-drr" href="alogin.php">Admin</a></li>
                        <li><a class="page-drr" href="secretary_login.php">Secretary</a></li>
                        <li><a class="page-drr" href="Member_login.php">Member</a></li>
                        <li><a class="page-drr" href="tenant_login.php">Rental</a></li>
                     </ul>
                 </li>
                <li class="dropdown">
                    <a class="dropdown-toggle IBM" data-toggle="dropdown" href="#">REACH-US<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        
                        <li><a class="page-drr" href="noticeboard.php">Notice Board</a></li>
                        <li><a class="page-drr" href="complain.php">Online Complain</a></li>
                        <li><a class="page-drr" href="rent-service.php">RENT+Service</a></li>
                        <li><a class="page-drr" href="sales_inquiery.php">Sales Enquiry</a></li>
                        <li><a class="page-drr" href="Client-Details.php">Our Client</a></li>
                        <li><a class="page-drr" href="Partner.php">Our Partner</a></li> 
                     </ul>
                 </li>
              
                  <li>
                    <a class="page-scroll IBM" href="#blog">NEWS</a>
                  </li>
                   <li>
                       
                    <a class="page-scroll IBM" href="#contact">CONTACT US</a>
                  </li>                
              </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/slide1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slide2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slide3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sustainable Luxuri </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="http://localhost:90/wordpress/">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Affordable</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="http://localhost:90/wordpress/">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Own Earth Sky Too</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="http://localhost:90/wordpress/">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
   <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Us</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img class="img1" src="img/about/img1.jpg" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <!-- <a href="#">
                <h4 class="sec-head">Society Automation System</h4>
              </a>
              <p>
                 The Society Automation System is a website/application which is being developed to automate the work of the society which will help to switch all the manual work to digital work. The system would be focusing on the data of various flat holders such as Their maintenance, bills & etc and will provide an online platform to pay the dues on the similar stage their pay slips will be shared directly to the user by mail-id or through a message. By doing this the time can be saved & lots of paper work can be reduced. In addition to that the system would also be having a complain box which will help the people to directly drag the attention of society mentors towards the issues and people can view the status regarding the same. 
              </p>    -->
              <a href="index.php">
                <h4 class="sec-head"></h4>
              </a>
              <p>
              <b>
                The Society Automation System is a website/application which is being developed to automate the work of the society which will help to switch all the manual work to digital work. 
              </b>
              </p><br>
              <p><b><i>
                The system would be focusing on the data of various flat holders such as Their maintenance, bills & etc and will provide an online platform to pay the dues on the similar stage their pay slips will be shared directly to the user by mail-id or through a message.
               </i></b></p><br>
              <p><b>
              By doing this the time can be saved & lots of paper work can be reduced.
               </b></p><br>
               <p><b><i> 
                In addition to that the system would also be having a complain box which will help the people to directly drag the attention of society mentors towards the issues and people can view the status regarding the same. 
              </i></b></p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-building"></i>
										</a>
                  <h4>Collecting Maintenance</h4>
                  <p align="justify">
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fas fa-users-cog"></i>
										</a>
                  <h4>Manage Rentals & sales Info</h4>
                  <p align="justify">
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-life-ring"></i>
										</a>
                  <h4>Account Summary</h4>
                  <p align="justify">
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fa fa-info"></i>
										</a>
                  <h4>24*7 Online Service</h4>
                  <p align="justify">
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fas fa-exchange-alt"></i>
										</a>
                  <h4>Online Transctions</h4>
                  <p align="justify">
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
											<i class="fas fa-tools"></i>
										</a>
                  <h4>Managing Repairs &amp; Maintenance</h4>
                  <p align="justify">
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->
 <!--   <div class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
       
        <div class="row">
          <div class="skill-text">
         
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-">
                  <input type="text" class="knob" value="0" data-rel="90" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Safe Transctions</h3>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-">
                  <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Graphics Design</h3>
                </div>
              </div>
            </div>
         
           
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-">
                  <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Accuracy</h3>
                </div>
              </div>
            </div>
             single-skill end
           
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="-circular">
                  <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Notificatin</h3>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>-->
  <!-- our-skill-area end -->

  <!-- Faq area start -->
  <div class="faq-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Faq Question</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="faq-details">
            <div class="panel-group" id="accordion">
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                <span class="acc-icons"></span>What is Society Automation System?
											</a>
										</h4>
                </div>
                <div id="check1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>
                      It is an online portal designed and developed to take over the everyday manual task of the society. 
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                <span class="acc-icons"></span>  Why to use Society Automation System ?
										</h4>
                </div>
                <div id="check2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                      We are making society automation system to lower down the daily tedious task of the society and make it more easy for the people of the society to use it. And also let the work of the society be transparent. 
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                <span class="acc-icons"></span>  How to use Society Automation System? 
											</a>
										</h4>
                </div>
                <div id="check3" class="panel-collapse collapse ">
                  <div class="panel-body">
                    <p>
                       It’s very easy to use. Just log in as a user, secretary or admin and our services are ready to use.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                <span class="acc-icons"></span>Is it free to use Society Automation System? 
											</a>
										</h4>
                </div>
                <div id="check4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                      No , we have subscription plans for our system according to the size of the society which are comparatively lesser than other competitive system .
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab">Project</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">Planning</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab">Success</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Society Automation System</h4>
                  <p>
                    Our main aim is to digitalize the paper work and reduce the human efforts needed to maintain the society . Society Automation System is driven by the motive of helping the people of the society and maintain the daily task . 
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Website Planning</h4>
                  <p>
                    We have designed and developed this website keeping our end user in perspective and in such a way that it becomes easy for our user to use our system .                  </p>
                 </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Success</h4>
                  <p>
                    We hope that our project helps our user and societies and reduce the headache of maintaining the society.  </p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Welcome To Our eSocitey Automation System</h2>
                <p>
                  To use SAS(eScocietyc Automation System) Services
                </p>
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                    <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wellcome Area -->

  <!-- Start team Area -->
  <!--<div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our special Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="img/team/1.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="img/team/2.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
      
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="img/team/3.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
       
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
										<img src="img/team/4.jpg" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>-->
  <!-- End Team Area -->

  <!-- Start reviews Area 
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
						<img src="img/about/2.jpg" alt="">
					</a>
      </div>
      <div class="work-right-text text-center">
        <h2>working with us</h2>
        <h5>Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
        <a href="#contact" class="ready-btn">Contact us</a>
      </div>
    </div>
  </div> -->


           <div class="container">  
            <div class="row">
                <div class="col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInDown;">
                    <img src="img/conn_two.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInDown;">
                  <br>
                    <h4 style="text-align: justify;">Are you part of the Management Committee of your Housing Society or Apartment?</h4>
                    <p style="text-align: justify;"><I>Following are the feature can be available for you,<br> if you society or apartment is registered with SAS</I></p>
                    <ul class="elements">
                        <li class="wow fadeInUp animated" data-wow-duration="900ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Avail different vendor services from single point of contact</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="800ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 200ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Store maintenance contracts insurance policies and set renewal reminders</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Easy connectivity with management committee</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 400ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Verify visitor with photo and details</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Lookup for bill history &amp; payment receipts</li><br/>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 600ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Online complaint booking</li><br/>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="700ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 700ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Free digital repository / document store facility</li><br/>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="800ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 800ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Receive notifications &amp; reminders through  mail/sms</li><br/>
                    </ul>
                </div>
            </div>
            &nbsp;
            <div class="row">
                <div class="col-sm-6 padding-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInDown;">
                  &nbsp;&nbsp;
                    <h3 style="text-align: justify;">Are you the Resident of a Society or Apartment?</h3>
                    <p style="text-align: justify;"><I>Following are the feature can be available for you,<br> if you society or apartment is registered with SAS</I></p>
                    <ul class="elements">
                        <li class="wow fadeInUp animated" data-wow-duration="900ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Avail different vendor services from single point of contact</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="800ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 200ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Store maintenance contracts insurance policies and set renewal reminders</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Easy connectivity with management committee</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 400ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Verify visitor with photo and details</li><br/>
                        <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Lookup for bill history &amp; payment receipts</li><br/>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 600ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Online complaint booking</li><br/>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="700ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 700ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Free digital repository / document store facility</li><br/>
            <li class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="800ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 800ms; animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>Receive notifications &amp; reminders through  mail/sms</li><br/>
                    </ul>
                </div>
                <div class="col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInDown;">
                    <img src="img/conn.png" class="img-responsive" alt="">
                </div>
            </div>
      </div>
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Project</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Upcoming</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Current</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Completed</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/20140726_123213-396x296.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/20140726_123213-396x296.jpg">
                      <h4>Good's life</h4>
                      <span>Dehgam</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/home_posh.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/home_posh.jpg">
                      <h4>Sangath Posh</h4>
                      <span>Ahemedabad</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/home_posh (2).jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/home_posh (2).jpg">
                      <h4>Sangath Pure</h4>
                      <span>Ahemedabad</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/si_gallary1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/si_gallary1.jpg">
                      <h4>Terrace</h4>
                      <span>Gandhinagar</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/daimond-slider2.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/daimond-slider2.jpg">
                      <h4>Sangath Diomand</h4>
                      <span>Ahmedaabd</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/SILVER-E.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/SILVER-E.jpg">
                      <h4>Sangth Silver</h4>
                      <span>Ahmedabad</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  <!-- start pricing area -->

   <!--  <div id="pricing" class="pricing-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Pricing Table</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>basic <br/> <span>$80 / month</span></h3>
            <ol>
              <li class="check">Online system</li>
              <li class="check cross">Full access</li>
              <li class="check">Free apps</li>
              <li class="check">Multiple slider</li>
              <li class="check cross">Free domin</li>
              <li class="check cross">Support Unlimited</li>
              <li class="check">Payment online</li>
              <li class="check cross">Cash back</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list active">
            <span class="saleon">top sale</span>
            <h3>standard <br/> <span>$110 / month</span></h3>
            <ol>
              <li class="check">Online system</li>
              <li class="check">Full access</li>
              <li class="check">Free apps</li>
              <li class="check">Multiple slider</li>
              <li class="check cross">Free domin</li>
              <li class="check">Support unlimited</li>
              <li class="check">Payment online</li>
              <li class="check cross">Cash back</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>premium <br/> <span>$150 / month</span></h3>
            <ol>
              <li class="check">Online system</li>
              <li class="check">Full access</li>
              <li class="check">Free apps</li>
              <li class="check">Multiple slider</li>
              <li class="check">Free domin</li>
              <li class="check">Support unlimited</li>
              <li class="check">Payment online</li>
              <li class="check">Cash back</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End pricing table area -->
  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      It's good system for every society manage diffrent manual works.<br>Every members have save own time or handle all kind society related works easily
                    </p>
                    <h6>Sangath IPL Group</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      It was good for next generation living<br>"All users will notify about every notice" 
                    </p>
                    <h6>Shree Balagi Group</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Royal Height Flats</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="http://localhost:90/wordpress/">
                    <img src="img/blog/new.jpg" alt="">
                  </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="http://localhost:90/wordpress/">13 comments</a>
                  </span>
                <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="http://localhost:90/wordpress/">Celebration Of COLOURS</a>
                  </h4>
                <p>
                Celebrate the festival of Holi in traditional style this year, We are organizing a full-fledged Holi event for you. This exciting event features a 2-day celebration which will begin on the night before Holi with the ceremony of Holika Dahan (burning of Holika), followed by the main event where you will get an opportunity to witness the unique celebration style of Holi </p>
              </div>
              <span>
                  <a href="http://localhost:90/wordpress/" class="ready-btn">Read more</a>
                </span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="http://localhost:90/wordpress/">
                    <img src="img/blog/club.jpg" alt="">
                  </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="http://localhost:90/wordpress/">130 comments</a>
                  </span>
                <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="http://localhost:90/wordpress/">Club Meeting</a>
                  </h4>
                <p>
                 There is a metting arranged in the society So please all the members come on time. </p>
              </div>
              <span>
                  <a href="http://localhost:90/wordpress/" class="ready-btn">Read more</a>
                </span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="http://localhost:90/wordpress/">
                    <img src="img/blog/life.jpg" alt="">
                  </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="http://localhost:90/wordpress/">10 comments</a>
                  </span>
                <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="http://localhost:90/wordpress/">Health Check-up</a>
                  </h4>
                <p>
There is a Health check up oraganized in the society for free of cost for members.So plaese all of you do come.</p>
              </div>
              <span>
                  <a href="http://localhost:90/wordpress/" class="ready-btn">Read more</a>
                </span>
            </div>
          </div>
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>We are In Beta version If any change need then tell us </h3>
            
            <!-- Trigger the modal with a button -->
<button type="button" class="sus-btn n" data-toggle="modal" data-target="#mddata">Give-Feedback</button>

<!-- Modal -->
<div id="mddata" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title1">FEEDBACK</h4>
        <p class="IBM">Feedback-Form</p>
      </div>
      <div class="modal-body">
        <form action="<?php $_PHP_SELF ?>" name="feedbackform" method="post">
        <div class="row">
          
            <div class="col-md-6 col-xs-6">
              <h3 style="color: skyblue;" class="IBM">Your Name</h3>
              <input type="text" name="feedUser" class="com" required>
            </div>
            <div class="col-md-6 col-xs-6">
              <h3 style="color: skyblue;" class="IBM">Your Email</h3>
              <input type="email" name="feedEmail" class="com" required>
            </div>  
        </div>
        <div class="row">
                    
            <div class="col-md-12 col-xs-12">
              <h3 style="color: skyblue;" class="IBM">Rate-us</h3>
              <select name="txtRate" class="select">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 col-xs-12">
              <h3 style="color: skyblue;" class="IBM">Is system working Good?</h3>
              <select name="txtSyS" class="select">
                <option value=""></option>
                <option value="yes">yes</option>
                <option value="no">no</option>
              </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <h3 class="IBM" style="color: skyblue;">Message</h3>
            <textarea name="txtFEEDsys" id="combbrief" cols="70" rows="10"></textarea>
           </div>
        </div>
       <div class="row" align="center">
          <div class="col-md-12 col-xs-12">
            <input type="submit" name="submit" value="submit" class="sus-btn n">
           </div>
        </div>
         </form> 
      </div>
      <div class="modal-footer">
        
        <button type="button" class="sus-btn n" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            
                       <div class="container">
                        <div class="row">
                          <table>
                            <tr>
                              <td><h2>Click Here for fill out form :</h2></td>
                              <td>  <button type="button" class="conbtn" data-toggle="modal" data-target="#exampleModalCenter">CONTACT-US</button></td>
                            </tr>
                          </table>
>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <div class="row">
         </div>
        
         <h1 class="modal-title" style="text-align: center;">CONTACT-FORM</h1>
         <p style="text-align: center;">Fill out the form for more information</p>
         
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body">
          <form action="<?php $_PHP_SELF ?>" method="post" name="Insert">
              <table width="800px" height="500px" align="center" >
                <tr>
                  <td>Name<span style="color: red;">*</span></td>
                  <td><input type="text" name="txtName" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Email<span style="color: red;">*</span></td>
                  <td><input type="email" name="txtEmail" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Subject<span style="color: red;">*</span></td>
                  <td><input type="text" name="txtSubject" class="com" size="22" required/></td>
                </tr>
                <tr>
                  <td>Message<span style="color: red;" >*</span></td>
                  <td><textarea name="txtMessage" id="combbrief" cols="40" rows="10"></textarea></td>
                </tr>
                <tr>
                  <td><input type="submit" name="add" value="ADD Them" class="conbtn"/></td>
                  <td><input type="reset" name="Insert1" value="Reset" class="conbtn" /></td>
                </tr>
              </table>
            </form>
        </div>
        <div class="modal-footer">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
          <button type="button" class="conbtn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58736.70359720376!2d72.67477936160465!3d23.058849333562982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSsangath+office!5e0!3m2!1sen!2sin!4v1550351415833" width="650" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

          </div>
          <div class="col-md-6 col-sm-6">
            <div class="row">
             <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fas fa-mobile-alt"></i>
                <p>
                  Call: +1 5589 55488 55<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
           </div>

          <div class="row">
             <div class="contact-icon text-center">
              <div class="single-icon">
                 <i class="fas fa-envelope"></i>
                <p>
                  Email: digital@sas.com<br>
                  <span>Web: www.example.com</span>
                </p>
              </div>
            </div>
           </div>

           <div class="row">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fas fa-map-marker-alt"></i>
                <p>
                  Location: A8 Abhishek Complex<br>
                  <span>NY 535022, Tapovan Ahemedabad</span>
                </p>
              </div>
            </div>
           </div>

          </div>
          <!-- Start contact icon column -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4><b>RESOURCES</b></h4>
                
                <div class="footer-contacts">
                 <table>
                   <tr><th><h5 class="IBM"><a href="#about">About Us</a></h5></th></tr>
                   <tr><th><h5 class="IBM"><a href="#contact">Contact Us</a></h5></th></tr>
                   <tr><th><h5 class="IBM"><a href="#services">Services</a></h5></th></tr>
                   <tr><th><h5 class="IBM"><a href="http://localhost:90/wordpress/">Blog</a></h5></th></tr>
                   <tr><th><h5 class="IBM"><a href="sitemap.php">Site Map</a></h5></th></tr>
                 </table>   
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4><b>GET IT TOUCH</b></h4>
                <p>401, Sangath Mall-1, Opp. Engg. College,</p>
                <p>Sabarmati-Gandhinagar Highway,</p>
                <p>Ahmedabad.</p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@sangathipl.com</p>
                   <hr>
                  <i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="https://goo.gl/maps/ZREDn7bjThu">Open in Googlemap</a>          
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 align="center"><b>SOCIAL LINKS</b></h4>
                <!--<div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div> -->
                <br><br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
      <div class="middle">
      <a class="btn" target="_blank" href="https://www.facebook.com/SangathIPL/">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="btn" target="_blank" href="https://twitter.com/SangathIPL">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="btn" target="_blank" href="https://plus.google.com/u/0/114284336287708267256">
        <i class="fab fa-google"></i>
      </a>
      <a class="btn" target="_blank" href="https://www.instagram.com/sangathipl1981/">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="btn" target="_blank" href="https://www.youtube.com/channel/UCuvAU4yZK1npLWnglM_iKWA">
        <i class="fab fa-youtube"></i>
      </a>
    </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Society Automation System</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed &amp; Developed by <a href="sas_team.php">SAS Team</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
