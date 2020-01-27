
<!--admin:view patients -------------->

<?php include('dashboard_header.php');?>

<table class="container-fluid table">
      <thead>
      <h2>Patients</h2>
         <tr>
             
             <th>Patient Id</th>
             <th>Name</th>
             <th>gender</th>
             <th>Cunsulting-Doctor</th>
             <th>E-mail</th>
             <th>mobile</th>
             <th></th>
             <th></th>
         </tr>
    </thead>
    <tbody>
    <?php 
					  require_once  'connection.php';
					  $sql = "select * from patient_registration";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {

						  ?>
      <tr>
        <td><?php echo $row['patient_id']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['appoint_doctor']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td><td>
        
        <td><a href="admin_doc_profile.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">View Profile</a></td></td>   
        </tr>
        <?php 
					  }
					  ?>
    </tbody>
  </table>










<?php include('dashboard_footer.php');?> 