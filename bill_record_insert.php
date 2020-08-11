<?php 
$connection = mysqli_connect("localhost", "root", "","sas_db"); 

$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0){

$name = mysql_real_escape_string($data->bpName);
$email = mysql_real_escape_string($data->bpEmail);
$contact = mysql_real_escape_string($data->bpCon);
$date = mysql_real_escape_string($data->bpdate);
$society = mysql_real_escape_string($data->bpSoc);	
$month = mysql_real_escape_string($data->bpMonth);
$amount = mysql_real_escape_string($data->bpAmount);	


$query = "INSERT INTO `maintenance_bill_paid_record`(`mp_name`, `mp_email`, `mp_contact`, `mp_paid_date`, `mp_society`, `mp_month`, `mp_Amount`) VALUES ('".$name."','".$email."','".$contact."','".$date."','".$society."','".$month."','".$amount."')";

if (mysqli_query($connection,$query)) {
	echo "All Maintenance Bill Records is Added Successfully";
}
else{
	echo "ERROR!";
}

}
?>