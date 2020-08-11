<?php include('header.php');?>
<?php
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");
  $q="select * from notice where ntype = 'Festival'";
  $resource = mysql_query($q);
  $count = mysql_num_rows($resource);
  $q2="select * from notice where ntype = 'Rules'";
  $resource2 = mysql_query($q2);
  $countsec = mysql_num_rows($resource2);
  $q3="select * from notice where ntype = 'Maintenance'";
  $resource3 = mysql_query($q3);
  $countth = mysql_num_rows($resource3);
  $q4="select * from notice where ntype = 'General'";
  $resource4 = mysql_query($q4);
  $countth = mysql_num_rows($resource4);
 ?>
<style>      
    section{
      margin-left: 200px;
      border-left: 2px solid gray;
      padding: 10px;
    }
    details{
      background-color: #636a46;
      margin: 5px;
            padding: 10px;
            color: white;
            border-radius: 50px;
    }
    details{
      cursor: pointer;
    }
    article{
      background-color: #b9bd89;
      color: black;
      padding: 10px;
      border-radius: 50px;
    }
    summary{
      outline: none;
    }
        aside{
      
      float: left;
      width: 200px;
      text-align: center;
      height: 200px; 
    }
    aside ul{
      list-style-type: none;
      padding: 0px;
      margin: 0px;  
    }
    aside ul li a{
      text-decoration: none;
      color: black;
      padding: 15px 25px;
      display: block; 
    }

    aside ul li a:hover{
      background-color: #636a46;
      color: white;
      border-radius: 9px
    }
</style>
<br>
<br><br>
<div id="services" class="services-area area-padding" style="background-color: #c2c2a3;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2><span>NOTICE - BOARD</span></h2><br>
            <p>SANGATH-IPL</p><br>
<p>for Sell Enquiry call : +91 7359865985 or Submit your requirements in contact-form.</p>
          </div>
          <br>
          <h3><u style="color: green">All Sangath-IPL Societies Notice</u></h3>
          <br>
          <div>
  <aside>
    <ul>
      <li><a href="#">Rules and Regulation</a></li>
      <li><a href="#">Society Maintenance</a></li>
      <li><a href="#">Society Festivals</a></li>
      <li><a href="#">General - Notice</a></li>
    </ul>
  </aside>
  <section>
    <details> 
    <summary>UPDATED RULES AND REGULATIOS</summary>
    <article>
             <?php    
     echo "<table border='1' align='center' width='600px' style='background-color: lightblue; border-radius: 6px;'>
       <tr>
         <th class='IBM'>Title</th>
         <th class='IBM'>Date</th>
         <th class='IBM'>Description</th>
       </tr>";?>
      <?php 
      while ($row2 = mysql_fetch_row($resource2)) 
      {
        echo "<tr>";
        echo "<td>".$row2[1]."</td>";
        echo "<td>".$row2[2]."</td>";
        echo "<td>".$row2[3]."</td>";
        echo "</tr>";
      }
      echo("</table"); 

       ?>
    </article>
   </details>

    <details> 
    <summary>SOCIETY MAINTENANCE CURRENT NOTICE</summary>
    <article>
                  <?php    
     echo "<table border='1' align='center' width='600px' style='background-color: lightblue; border-radius: 6px;'>
       <tr>
         <th class='IBM'>Title</th>
         <th class='IBM'>Date</th>
         <th class='IBM'>Description</th>
       </tr>";  ?>
      <?php 
      while ($row3 = mysql_fetch_row($resource3)) 
      {
        echo "<tr>";
        echo "<td>".$row3[1]."</td>";
        echo "<td>".$row3[2]."</td>";
        echo "<td>".$row3[3]."</td>";
        echo "</tr>";
      }
      echo("</table"); 

       ?>
    </article>
   </details>


      <details> 
    <summary>UPCOMIN SOCIETY FESTIVAL CELIBRATION NOTICE</summary>
    <article>
      <?php    
     echo "<table border='1' align='center' width='600px' style='background-color: lightblue; id='table1'>
       <tr>
         <th class='IBM'>Title</th>
         <th class='IBM'>Date</th>
         <th class='IBM'>Description</th>
       </tr>";?>
      <?php 
      while ($row = mysql_fetch_row($resource)) 
      {
        echo "<tr>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "</tr>";
      }
      echo("</table"); 

       ?>
    </article>
   </details> 

    <details> 
    <summary>GENERAL-NOTICE</summary>
    <article>
        <?php    
     echo "<table border='1' align='center' width='600px' style='background-color: lightblue; id='table1'>
       <tr>
         <th class='IBM'>Title</th>
         <th class='IBM'>Date</th>
         <th class='IBM'>Description</th>
       </tr>";?>
      <?php 
      while ($row4 = mysql_fetch_row($resource4)) 
      {
        echo "<tr>";
        echo "<td>".$row4[1]."</td>";
        echo "<td>".$row4[2]."</td>";
        echo "<td>".$row4[3]."</td>";
        echo "</tr>";
      }
      echo("</table"); 

       ?>
    </article>
   </details>   

  </section>
          </div>
        </div>
      </div>
    </div>
</div> 


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>           
<?php include('footer.php'); ?>