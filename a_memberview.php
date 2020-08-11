<?php 
              session_start();
?>
<?php
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");
  $q="select * from member";
  $resource = mysql_query($q);
  $count = mysql_num_rows($resource);
 ?>
<br>
<br>
<br>
<br>
<style>
  tbody{
    overflow-x: scroll;
  }
</style>
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
            <h2><span>Manage-Memeber</span></h2><br>
                    <p>SANGATH-IPL</p><br>
          </div>
          <br>
          <h3><u style="color: green">All-Society Members</u></h3>
          <br>
          <div id="d">
            <table width="1200" border="1">
             <tbody style="overflow: scroll;"> 
            <tr style="background-color: gray; color: white; height: 50px; border-color: gray;">
              <td>First Name </td>
              <td>Middle Name</td>
              <td>Last Name </td>
              <td>Email-ID</td>
              <td>Contact-No</td>
              <td>Gender</td>
              <td>House No</td>
              <td>Block No</td>
              <td>Address </td>
              <td>Profession</td>
              <td>Parking Number</td>
              <td>Project type </td>
              <td>If flat then select</td>
              <td>Project Name</td>
              <td>City</td>
              <td>State</td>
            </tr>
            <?php while ($row = mysql_fetch_row($resource)) 
                 { 
            ?>
            
            <tr>
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
            </tr>
          </tbody>
          <?php } ?>
            </table>
          </div>
        </div> 
       </div>
      </div>
     </div>
