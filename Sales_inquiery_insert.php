<?php 
$connection = mysqli_connect("localhost", "root", "","sas_db"); 

$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0){

$fn = mysql_real_escape_string($data->siFname);
$mn = mysql_real_escape_string($data->siMname);
$ln = mysql_real_escape_string($data->siLname);
$simail = mysql_real_escape_string($data->siEmail);
$scon = mysql_real_escape_string($data->siContact);
$siproj = mysql_real_escape_string($data->siProject);
$simsg = mysql_real_escape_string($data->ngMsg);
	

$query = "INSERT INTO `Sales`(`si_fname`, `si_mname`, `si_lname`, `si_email`, `si_contact`, `si_project`, `si_msg`) VALUES ('".$fn."','".$mn."','".$ln."','".$simail."','".$scon."','".$siproj."','".$simsg."')";

if (mysqli_query($connection,$query)) {
	echo "Your Requirement is Submited Successfully .!";
}
else{
	echo "ERROR!";
}

}
?>