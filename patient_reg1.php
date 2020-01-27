
<!--patient registration connection page----------->

<?php
include_once 'connection.php';


$patient_id         = $_POST['patient_id'];
$first_name         = $_POST['first_name'];
$last_name          = $_POST['last_name'];
$gender             = $_POST['gender'];
$age                = $_POST['age'];
$email              = $_POST['email'];
$mobile             = $_POST['mobile'];
$address            = $_POST['address'];
$id_card_no         = $_POST['id_card_no'];
$medical_history    = $_POST['medical_history'];
$username           = $_POST['username'];
$password           = $_POST['password'];

if (isset($_POST['submit']))
{
	$sql="INSERT INTO patient_registration(patient_id,first_name,last_name,gender,age,email,mobile,address,id_card_no,medical_history,username,password)VALUES
    ('".$patient_id."','".$first_name."','".$last_name."','".$gender."','".$age."','".$email."','".$mobile."','".$address."','".$id_card_no."','".$medical_history."','".$username."','".$password."')";
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "login.php";
	}
}
?>	
