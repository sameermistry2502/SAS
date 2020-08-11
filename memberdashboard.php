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
<?php include("header.php"); ?>
<br><br>
<div id="services" class="services-area area-padding" style="background-color: #c2c2a3";>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2><span>MANAGE-MEMBER</span></h2><br>
                    <p>SANGATH-IPL</p><br>
          </div>
          <br>
          <h3 align="center"><u style="color: green"><a href="a_memberview.php">View All Members</a></u></h3>
          <h3 align="center"><u style="color: green"><a href="#">View All Members Report</a></u></h3>
        </div>
       </div>
      </div>
     </div>
        