
<!--admin views the profiles of doctor-------->

<?php include('dashboard_header.php');?>

<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">
		 	
		</div>
		<div class="col-md-4 ">
        <?php
           require_once 'connection.php';
		    echo $var=$_GET['id1'];
		   $sql="select * from doctor_registration where doctor_id='".$var."'";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?> 	
			<form >
			<h2>Doctor Profile<a href="admin_edit_doc_profile.php?id=<?php echo $row['doctor_id'];?>"><button class="btn btn-primary"> Edit Profile</button></a></h2>
			 
			 
			 <div class="form-group">
				<label for="exampleInputdoctor_id">Doctor id</label>
				<input type="text" class="form-control" id="exampleInputdoctor_id"   name="doctor_id" value="<?php echo $row['doctor_id'];?>">
				</div>
			  <div class="form-group">
				<label for="exampleInputname"> Name</label>
				<input type="text" class="form-control" id="examplInputname"  name="doctor_name" value="<?php echo $row['doctor_name'];?>">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmai1">Email</label>
				<input type="lastname" class="form-control" id="exampleInputemail" aria-describedby="emailHelp"  name="email" value="<?php echo $row['email'];?>">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>

			  <div class="form-group">
				<label for="exampleInputcard_id_no">Mobile</label>
				<input type="text" class="form-control" id="exampleInputcard_id_no"  name="mobile" value="<?php echo $row['mobile'];?>">
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
				<label for="exampleInputaddress_line">Address</label>
				<input type="text" class="form-control" id="exampleInputaddress_line"   name="clinic_address_line1" value="<?php echo $row['clinic_address_line1'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputcountry">select country</label>
				<input type="text" class="form-control" id="exampleInputcountry"   name="country" value="<?php echo $row['country'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputstate">State</label>
				<input type="text" class="form-control" id="exampleInputstate"   name="state" value="<?php echo $row['state'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputcity">City</label>
				<input type="text" class="form-control" id="exampleInputcity"   name="city" value="<?php echo $row['city'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputpincode">Pincode</label>
				<input type="text" class="form-control" id="exampleInputpincode"   name="pincode" value="<?php echo $row['pincode'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputtiming_from">Timing from</label>
				<input type="text" class="form-control" id="exampleInputtiming_from"   name="time_from" value="<?php echo $row['time_from'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputtiming_to">Timing to</label>
				<input type="text" class="form-control" id="exampleInputtiming_to"   name="time_to" value="<?php echo $row['time_to'];?>">
				</div>
				
				 <div class="form-group">
				<label for="exampleInputusername">Username</label>
				<input type="text" class="form-control" id="exampleInputusername"   name="username" value="<?php echo $row['username'];?>">
				</div>
				<div class="form-group">
				<label for="exampleInputpassword">Status</label>
				<input type="text" class="form-control" id="exampleInputpassword"   name="status" readonly value="<?php echo $row['status'];?>">
				</div>
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