<?php 
$connection = mysqli_connect("localhost", "root", "","sas_db"); 

$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0){

$for = mysql_real_escape_string($data->fFor);
$from = mysql_real_escape_string($data->fFrom);
$soc = mysql_real_escape_string($data->fSocr);
$desc = mysql_real_escape_string($data->fDesc);
$amount = mysql_real_escape_string($data->fAmount);	


$query = "INSERT INTO `funds`(`fund_for`, `fund_from`, `fund_society`, `fund_desc`, `fund_amount`) VALUES ('".$for."','".$from."','".$soc."','".$desc."','".$amount."')";

if (mysqli_query($connection,$query)) {
	echo "Fund Detail is Added Successfully";
}
else{
	echo "ERROR!";
}

}
?>