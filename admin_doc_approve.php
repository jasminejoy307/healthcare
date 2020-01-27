<!----doctor approval page---------->

<?php include('dashboard_header.php');?>

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
			<form >
			<h2>Doctor Profile</h2>
			 
			 
			 <div class="form-group">
				<label for="exampleInputdoctor_id">Doctor id</label>
				<input type="text" class="form-control" id="exampleInputdoctor_id"   name="doctor_id"value="<?php echo $row['doctor_id'];?>">
				</div>
			  <div class="form-group">
				<label for="exampleInputname"> Name</label>
				<input type="text" class="form-control" id="examplInputname"  name="doctor_name"value="<?php echo $row['doctor_name'];?>">
			  </div>

			  <div class="form-group">
				<label for="exampleInputcard_id_no">National Identity number</label>
				<input type="text" class="form-control" id="exampleInputcard_id_no"  name="id_card_number" value="<?php echo $row['id_card_number'];?>">
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputqualification">Qualification</label>
				<input type="text" class="form-control" id="exampleInputqualification"   name="qualification" value="<?php echo $row['qualification'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputexperiance">Experiance</label>
				<input type="text" class="form-control" id="exampleInputexperiance"   name="experience" value="<?php echo $row['experience'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputspecialization">Specialization</label>
				<input type="text" class="form-control" id="exampleInputspecialization"   name="specialization" value="<?php echo $row['specialization'];?>">
				</div>
				
				
				 <div class="form-group">
				<label for="exampleInputpmc_certificate_no">Certificate number</label>
				<input type="text" class="form-control" id="exampleInputpmc_certificate_no"   name="pmc_certificate_no" value="<?php echo $row['pmc_certificate_no'];?>">
                </div>
                
                <div class="form-group">
				<label for="exampleInputpassword">Status</label>
				<input type="text" class="form-control" id="exampleInputpassword"   name="status" readonly value="<?php echo $row['status'];?>">
                </div>
                <td><a href="admin_doc_approve1.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Approve</a></td></td>
                <td><a href="admin_doc_reject1.php?id=<?php echo $row['doctor_id']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">Remove</a></td></td>
                </form>
            <?php
				}
			?>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>

<?php include('dashboard_footer.php');?>