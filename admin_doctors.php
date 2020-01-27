<!---admin page:doctors-approve/reject----->

<?php include('dashboard_header.php');?>

<table class="container-fluid table">
      <thead>
      <h2>Doctors</h2>
         <tr>
             
             <th>Doctor Id</th>
             <th>Name</th>
             <th>Specialization</th>
             <th>Mobile</th>
             <th>E-mail</th>
             <th>Status</th>
             <th></th>
         </tr>
    </thead>
    <tbody>
    <?php 
					  require_once  'connection.php';
					  $sql = "select * from doctor_registration";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {

						  ?>
      <tr>
        <td><?php echo $row['doctor_id']; ?></td>
        <td><?php echo $row['doctor_name']; ?></td>
        <td><?php echo $row['specialization']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><a href="admin_doc_approve.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Approve/Remove</a></td></td>
        <td><a href="admin_doc_profile.php?id1=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">View Profile</a></td></td>   
        </tr>
        <?php 
					  }
					  ?>
    </tbody>
  </table>







<?php include('dashboard_footer.php');?> 