
<!----------patient appoinment booking page--->

<?php include('patient_header.php');?>


<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">	
        <?php
           require_once 'connection.php';
		   $var=$_GET['id'];
		   $sql="select * from doctor_registration where doctor_id='".$var."'";
           $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
            
             ?>
			<form  action="patient_book_appointment1.php" method="post">
			<h2>Doctor Registration</h2>
			 <div class="form-group">
				<label for="exampleInputdoctor_id">Doctor id</label>
				<input type="text" class="form-control" id="exampleInputdoctor_id"  name="doctor_id" value="<?php echo $row['doctor_id'];?>">
				</div>
			  <div class="form-group">
				<label for="exampleInputname"> Name</label>
				<input type="text" class="form-control" id="examplInputname"  name="doctor_name" value="<?php echo $row['doctor_name'];?>">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmai1">Date</label>
				<input type="date" class="form-control" id="exampleInputemail"   name="apoint_date" >
				
			  </div>

			  <div class="form-group">
				<label for="exampleInputcard_id_no">Time</label>
				<input type="time" class="form-control" id="exampleInputcard_id_no"  name="appoint_time">
			  </div>
              <button type="submit" class="btn btn-primary" name="submit">book now</button>
			  
</form>
<?php
                }
                ?>
</div>
</div>
</div>


<?php include('patient_footer.php');?>