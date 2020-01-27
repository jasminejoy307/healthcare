
<!---applied patients in cardiology department---------->

<?php include('patient_header.php');?>

<table class="container-fluid table">
      <thead>
          <h2>Cardiology Department</h2>
         <tr>
    
             
             <th>Name</th>
             <th>Doctor</th>
             <th>Date</th>
             <th>Time</th>
             <th>status</th>
             <th></th>
         </tr>
    </thead>
    <tbody>
<?php
include('connection.php');
$var =  $_SESSION['patient_id'];
$sql = "select * from patient_registration where patient_id='".$var."'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
   
    ?>
<tr>

<td><?php echo $row['first_name']; ?></td>
<td><?php echo $row['appoint_doctor']; ?></td>
<td><?php echo $row['apoint_date']; ?></td>
<td><?php echo $row['appoint_time']; ?></td>
<td><?php echo $row['appoint_status']; ?></td>

</tr>
        <?php 
					  }
                      ?>
                      </tbody>
  </table>


<?php include('patient_footer.php');?>