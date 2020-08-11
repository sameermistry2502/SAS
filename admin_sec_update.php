<div class="hidden">
<?php //include('dbcon.php');?>
</div>
<?php

$conn =  mysql_connect("localhost","root","","sas_db");
mysql_select_db("sas_db");

$sid = $_POST['txtId'];
$fn = $_POST['txtFname'];
$mn = $_POST['txtMname'];
$ln = $_POST['txtLname'];
$email = $_POST['txtSEmail'];
$con = $_POST['txtSNumber'];
$gen = $_POST['txtSGender'];
$pn = $_POST['txtProject'];
$grp = $_POST['txtsGroup'];
$houseno = $_POST['txtHnumber'];
$curradd = $_POST['currsAdd'];
$peradd = $_POST['persAdd'];
$blkno = $_POST['txtBlock'];
$proff = $_POST['txtProfesstion'];
$type = $_POST['ProjectType'];
$prno = $_POST['txtPnumber'];
$ifflt = $_POST['txtIfFlat'];
$city = $_POST['txtsCity'];
$stat = $_POST['txtsState'];
error_reporting(E_ERROR | E_PARSE);
$select_query = mysql_query("select * from secretary where fname='$fn' and sid!='$sid'");

$select_result = mysql_query($select_query,$conn);

            if(mysql_num_rows($select_result)<=0)
            {
            
            $query = "Update secretary set fname='$fn', mname='$mn', lname='$ln' ,semail='$email' ,sconact_no='$con' ,sgender='$gen',sproject = '$pn',sgroup ='$grp',shouse_no='$houseno',sblock='$blkno',scurr_add='$curradd',sper_add='$peradd',s_profession='$proff',sparkingno='$prno',property_type='$type',sif_flat='$ifflt',city='$city',state='$stat' where sid='$sid'";


              
            $resultt = mysql_query($query);


             if(!$resultt)
             {
               echo "<h1>Secretary Update Failed...!</h1>";
             }
             else
             {
               echo "<h1>Secretary Update Successful...!</h1>";
               header('location: view_all_members.php');
             }
            }
              else
            {
              echo "<h1>Event Already Exist.</h1>";
            }   
        ?>
       
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>secretary Update</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<div class="hidden">

</div>
   

</head>
<body>
</body>

</html>