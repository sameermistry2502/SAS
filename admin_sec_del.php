<?php
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");
$sid = $_GET['sid'];

$res = mysql_query("delete from secretary where sid =$sid");

	if($res == TRUE)
	{
		?>
	<script type="text/Javascript">

		alert('DELETE secretary Successfully');

	</script>
	<?php
	   header('location: view_all_members.php'); 
     }
	else
	{ ?>  
    <script type="text/Javascript">
		alert('ERROR in DELETE secretary !!!??');
	</script>
<?php
    header('location: view_all_members.php'); 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>secretary delete</title>





</head>
<body>


</body>

</html>