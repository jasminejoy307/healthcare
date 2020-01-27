
<!-------login connection page------>

<?php
include("connection.php");
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
//adminlogin
$sql="SELECT username FROM admin WHERE username='".$username."' and password='".$password."'";
$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			require_once "admin_home.php";
		}
	}
	else 
	{
		$sql="SELECT * FROM doctor_registration WHERE email='".$username."' and password='".$password."' and status='approved'";
        $result=mysqli_query($conn,$sql);
	    if(mysqli_num_rows($result)>0)
	    {
			while($row=mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION['doctor_id']=$row['doctor_id'];
				$_SESSION['doctor_name']=$row['doctor_name'];

				require_once "doctor_home.php";
			}
		}
					
	 else 
	    {
			
			$sql="SELECT * FROM patient_registration WHERE email='".$username."' and password='".$password."'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{	
				while($row=mysqli_fetch_assoc($result))
				{
					session_start();
					$_SESSION['patient_id']=$row['patient_id'];
				
					require_once "patient_home.php";
				}
			}				
			else
			{
				echo "email or password incorrect";
			}
		}
	
	
	
        
	}
}
mysqli_close($conn);
?>