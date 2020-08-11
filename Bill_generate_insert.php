<?php 
$connection = mysqli_connect("localhost", "root", "","sas_db"); 

$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0){

$title = mysql_real_escape_string($data->txtBtitle);
$desc = mysql_real_escape_string($data->txtBdesc);
$fdate = mysql_real_escape_string($data->txtFdate);
$ddate = mysql_real_escape_string($data->txtDuedate);
$month = mysql_real_escape_string($data->txtbMonth);
$socname = mysql_real_escape_string($data->txtSocbname);
$amount = mysql_real_escape_string($data->txtAdetails);
$text1 = mysql_real_escape_string($data->txtText1);
$text2 = mysql_real_escape_string($data->txtText2);
$discount = mysql_real_escape_string($data->txtDisbillamt);
$tamt = mysql_real_escape_string($data->txtFfinalAmt);	

$query = "INSERT INTO `maintenance_bill`(`bill_title`, `bill_description`, `bill_fdate`, `bill_ddate`, `bill_month`, `bill_society_name`, `bill_amount`, `bill_text_amount`, `bill_text2_amount`, `bill_discount_amount`, `bill_total_amount`) VALUES ('".$title."','".$desc."','".$fdate."','".$ddate."','".$month."','".$socname."','".$amount."','".$text1."','".$text2."','".$discount."','".$tamt."')";
if (mysqli_query($connection,$query)) {
	echo "Bill Form is Generated .!";
}
else{
	echo "ERROR!";
}

}
?>