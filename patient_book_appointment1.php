
<!--patient appoinment booking-connection page----->

<?php
session_start();
include('connection.php');
$apoint_date         = $_POST['apoint_date'];
$appoint_time        = $_POST['appoint_time'];
$appoint_doctor      = $_POST['doctor_name'];
if (isset($_POST['submit']))
{
    
      $var=$_SESSION['patient_id'];

    echo $sql="UPDATE patient_registration SET apoint_date='".$apoint_date."',appoint_time='".$appoint_time."',appoint_doctor='".$appoint_doctor."' where patient_id =".$var."";
    if ($conn->query($sql))
        {
            echo "hello";
            header('location:patient_home.php');
        }

    }

mysqli_close($conn);
?>