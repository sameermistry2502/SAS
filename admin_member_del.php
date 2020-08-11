<?php
  mysql_connect("localhost","root","");
  mysql_select_db("sas_db");
$mid = $_GET['mid'];

$res = mysql_query("delete from member where mid =$mid");

	if($res == TRUE)
	{
		?>
	<script type="text/Javascript">

		alert('DELETE Memebr Successfully');
        
	</script>
	<?php
	   header('location: view_societydata.php'); 
     }
	else
	{ ?>  
    <script type="text/Javascript">
		alert('ERROR in DELETE Memebr !!!??');
	</script>
<?php
    header('location: view_societydata.php'); 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>member delete</title>





</head>
<body>


</body>

</html>