
<!--doctor views appointed patients-----------------> 

<?php include('doctor_header.php');?>

<table class="container-fluid table">
      <thead>
        <h2>Patients</h2>
         <tr>
             
             <th>patient Id</th>
             <th>Name</th>
             <th>Gender</th>
             <th>Age</th>
             <th>Mobile</th>
             <th>E-mail</th>
             <th>Status</th>
             <th></th>
         </tr>
    </thead>
    <tbody>
    <?php 
                      $var=$_SESSION['doctor_name'];
					  require_once  'connection.php';
					  $sql = "select * from patient_registration where appoint_doctor='".$var."'";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {

						  ?>
      <tr>
        <td><?php echo $row['patient_id']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['appoint_status']; ?></td>
        <td><a href="admin_doc_profile.php?id=<?php echo $row['patient_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">View Profile</a></td></td>   
        </tr>
        <?php 
					  }
					  ?>
    </tbody>
  </table>




<?php include('doctor_footer.php');?>