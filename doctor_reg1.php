
<!--doctor registration connection page---------->

<?php
include_once 'connection.php';	
        $doctor_id             = $_POST['doctor_id'];
        $doctor_name           = $_POST['doctor_name'];
        $email                 = $_POST['email'];
        $mobile                = $_POST['mobile'];
        $id_card_number        = $_POST['id_card_number'];
        $qualification         = $_POST['qualification'];
        $experience            = $_POST['experience'];
        $specialization        = $_POST['specialization'];
        $pmc_certificate_no    = $_POST['pmc_certificate_no'];
        $clinic_address_line1  = $_POST['clinic_address_line1'];
        $country               = $_POST['country'];
        $state                 = $_POST['state'];
        $city                  = $_POST['city'];
        $pincode               = $_POST['pincode'];
        $time_from             = $_POST['time_from'];
        $time_to               = $_POST['time_to'];
        $username              = $_POST['username'];
        $password              = $_POST['password'];
        $status                = $_POST['status'];
if (isset($_POST['submit']))
{

        $sql="INSERT INTO  doctor_registration(doctor_id,doctor_name,email,mobile,id_card_number,qualification,experience,specialization,pmc_certificate_no,clinic_address_line1,country,state,city,pincode,time_from,time_to,username,password,status) 
        VALUES('".$doctor_id."','".$doctor_name."','".$email."','".$mobile."','".$id_card_number."','".$qualification."','".$experience."','".$specialization."','".$pmc_certificate_no."','".$clinic_address_line1."','".$country."','".$state."','".$city."','".$pincode."','".$time_from."','".$time_to."','".$username."','".$password."','".$status."')";
        if(!$result=$conn->query($sql))
        {
            die('there was an error running the query['.$conn->error.']');
        }
        else
        {
         require_once "login.php";
        }
    }
mysqli_close($conn);
?>