<?php 
$connection = mysqli_connect("localhost", "root", "","sas_db"); 

$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0){

$name = mysql_real_escape_string($data->tName);
$email = mysql_real_escape_string($data->tEmail);
$con = mysql_real_escape_string($data->tContact);
$pro = mysql_real_escape_string($data->tProffesion);
$hno = mysql_real_escape_string($data->tThno);
$bno = mysql_real_escape_string($data->tBlockno);
$society = mysql_real_escape_string($data->tSocName);
$add = mysql_real_escape_string($data->tresAddress);
$pass = mysql_real_escape_string($data->txtPass);
$sdate = mysql_real_escape_string($data->taggStartdate);
$duedate = mysql_real_escape_string($data->taggDuedate);	
$rate = mysql_real_escape_string($data->tRate);
$skinfo = mysql_real_escape_string($data->tSpecinfo);	


$query = "INSERT INTO `rental`(`rname`, `remail`, `rcontact`, `rproffesion`, `rhouse`, `rblock`, `rsociety`, `rfulladd`, `rafdate`, `raddaate`, `rrate`, `rspecinfo`, `rpass`) VALUES ('".$name."','".$email."','".$con."','".$pro."','".$hno."','".$bno."','".$society."','".$add."','".$pass."','".$sdate."','".$duedate."','".$rate."','".$skinfo."')";

if (mysqli_query($connection,$query)) {
	echo "Reantal IS Registered Successfully";
}
else{
	echo "ERROR!";
}

}
?>