
<!---patient view cardiology doctors---------->

<?php include('patient_header.php');?>

<table class="container-fluid table">
      <thead>
          <h2>Cardiology Department</h2>
         <tr>
             
             <th>Doctor Id</th>
             <th>Name</th>
             <th>Specialization</th>
             <th>Mobile</th>
             <th>E-mail</th>
             
             <th></th>
         </tr>
    </thead>
    <tbody>
<?php
include('connection.php');
$var = $_GET['id'];
$sql = "select * from doctor_registration where specialization='".$var."'";
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
<td><a href="patient_doc_profile.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">View Profile</a></td></td>
<td><a href="patient_book_appointment.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Book Appointment</a></td></td>
</tr>
        <?php 
					  }
                      ?>
                      </tbody>
  </table>

<?php include('patient_footer.php');?> 