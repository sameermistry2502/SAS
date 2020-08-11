<?php 
              session_start();
?>
<br>
<br>
<br>
<br>
          <table border="1" align="center" style="border-color: #00ccff">
            <tr>
              <td>          <h3 style="color: #00ccff";><?php
                     if($_SESSION['txtEmail']==true)
                     {
                       echo "Welcome "."  ".$_SESSION['txtEmail'];
                     }
                     else
                     {
                      header('location:alogin.php');
                     }
               ?>      
          </h3></td>
           

             <td align="center"><h3><a href="alogout.php">Logout</a></h3></td>
            </tr>
          </table>   
<?php include('header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Structure</title>
    <style>
          .button{
        background: transparent;
        border: none;
        outline: none;
        color: #fff;
        background: #00cc00;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 6px; 
        height: 40px;
        width: 200px;
        font-size: 25px;
    }
    	#div1{
    		border: 2px;
    		background-color: gray;
    		float: left;
    		height: 80px;
    		width: 80px;
    	}
    	#div2{
    		background-color: gray;
    		float: left;
    		height: 80px;
    		width: 80px;
    	}
    	#div3{
    		border: 3px;
    		background-color: gray;
            float: left;
            height: 80px;
    		width: 80px;
    	}
    	#div4{
    		background-color: gray;
    		float: left;
    		height: 80px;
    		width: 80px;
    	}
    
    	#div5{
            background-color: gray;
            float: left;
              height: 80px;
    		width: 80px;
    	}
    	#div6{
           background-color: gray;
           float: left;
             height: 80px;
    		width: 80px;
    	}
    	#div7{
           background-color: gray;
           float: left;
             height: 80px;
    		width: 80px;
    	}
    	#div8{
          background-color: gray;
          float: left;
            height: 80px;
    		width: 80px;
    	}
    	#div9{
          background-color: gray;
          float: left;
            height: 80px;
    		width: 80px;
    	}
    	#div10{
    		background-color: gray;
    		  height: 30px;
    		width: 240px;
    	}
              #div1:hover{
 background-color: lightgreen;
}
        #div2:hover{
 background-color: lightgreen;
}
        #div3:hover{
 background-color: lightgreen;
}
        #div4:hover{
 background-color: lightgreen;
}
        #div5:hover{
 background-color: lightgreen;
}
        #div6:hover{
 background-color: lightgreen;
}
        #div7:hover{
 background-color: lightgreen;
}
        #div8:hover{
 background-color: lightgreen;
}
        #div9:hover{
 background-color: lightgreen;
}

    </style>

</head>
<body>
    <br><br>
<div id="services" class="services-area area-padding" style="background-color: #c2c2a3";>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2><span>SELL View</span></h2><br>
    <h1 style="color: green">A1-REPORT</h1>
    <hr>
    <marquee><h6 style="color: red">Note : Here <span style="color: lightgreen">COLOR</span> is identify as Selled Property or <span style="color: gray">COLOR</span> identify as remainning property..</h6></marquee>
    <br>
	<div>
		<div id="div1" class="A1">303</div>
		<div id="div2" class="A1">302</div>
		<div id="div3" class="A1">301</div>
		<div style="clear: both;"></div>
	</div>
	<div>
		<div id="div4" class="A1">203</div>
		<div id="div5" class="A1">202</div>
		<div id="div6" class="A1">201</div>
		<div style="clear: both;"></div>
	</div>
	<div>
		<div id="div7" class="A1">103</div>
		<div id="div8" class="A1">102</div>
		<div id="div9" class="A1">101</div>
		<div style="clear: both;"></div>
    </div>
	<div>
		<div id="div10" class="A1">Ground floor</div>
		<div style="clear: both;"></div>
	</div>
    <br>

    <h1 style="color: green">A2-REPORT</h1>
    <hr>
    <marquee><h6 style="color: red">Note : Here <span style="color: lightgreen">COLOR</span> is identify as Selled Property or <span style="color: gray">COLOR</span> identift as remainning property..</h6></marquee>
    <br>
    <div>
        <div id="div1" class="A1">303</div>
        <div id="div2" class="A1">302</div>
        <div id="div3" class="A1">301</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div4" class="A1">203</div>
        <div id="div5" class="A1">202</div>
        <div id="div6" class="A1">201</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div7" class="A1">103</div>
        <div id="div8" class="A1">102</div>
        <div id="div9" class="A1">101</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div10" class="A1">Ground floor</div>
        <div style="clear: both;"></div>
    </div>
    <br>
        <h1 style="color: green">B1-REPORT</h1>
    <hr>
    <marquee><h6 style="color: red">Note : Here <span style="color: lightgreen">COLOR</span> is identify as Selled Property or <span style="color: gray">COLOR</span> identift as remainning property..</h6></marquee>
    <br>
    <div>
        <div id="div1" class="A1">303</div>
        <div id="div2" class="A1">302</div>
        <div id="div3" class="A1">301</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div4" class="A1">203</div>
        <div id="div5" class="A1">202</div>
        <div id="div6" class="A1">201</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div7" class="A1">103</div>
        <div id="div8" class="A1">102</div>
        <div id="div9" class="A1">101</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div10" class="A1">Ground floor</div>
        <div style="clear: both;"></div>
    </div>
        <h1 style="color: green">B1-REPORT</h1>
    <hr>
    <marquee><h6 style="color: red">Note : Here <span style="color: lightgreen">COLOR</span> is identify as Selled Property or <span style="color: gray">COLOR</span> identift as remainning property..</h6></marquee>
    <br>
    <div>
        <div id="div1" class="A1">303</div>
        <div id="div2" class="A1">302</div>
        <div id="div3" class="A1">301</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div4" class="A1">203</div>
        <div id="div5" class="A1">202</div>
        <div id="div6" class="A1">201</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div7" class="A1">103</div>
        <div id="div8" class="A1">102</div>
        <div id="div9" class="A1">101</div>
        <div style="clear: both;"></div>
    </div>
    <div>
        <div id="div10" class="A1">Ground floor</div>
        <div style="clear: both;"></div>
    </div>
    <br>
    <input type="submit" name="PropertySelled" value="SAVE" class="button" />
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include('footer.php'); ?>