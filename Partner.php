<?php include('header2.php');?>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
<style>
.containerrr {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #66ccff;
}

.containerrr:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<br>
<body>
<div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <center><h2 class="IBM">Our Partners</h2></center>
             <span></span>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          
<div class="containerrr">
  <img src="img\portfolio\banner_posh.jpg" alt="Partner1" class="image">
  <div class="overlay">
    <div class="text IBM">Sangath-PURE</div>
  </div>
</div>

        </div>
         <div class="col-md-4">
<div class="containerrr">
  <img src="img\portfolio\POSH-Banner.jpg" alt="Partner2" class="image">
  <div class="overlay">
    <div class="text IBM">Sangath-POSH</div>
  </div>
</div> 
        </div>
         <div class="col-md-4">
<div class="containerrr">
  <img src="img\portfolio\terrace_banner.jpg" alt="Partner3" class="image">
  <div class="overlay">
    <div class="text IBM">TERRACE</div>
  </div>
</div>          
        </div>
      </div>
    </div>
</div>
</body>
</html>

<?php include('footer.php'); ?>