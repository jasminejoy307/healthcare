
<!--doctor registration page----------->

<?php include('header.php');?>

<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">	
			<form name="myform" action="doctor_reg1.php" method="post" >
			<h2>Doctor Registration</h2>
			 
			 
			 <div class="form-group">
				<label for="exampleInputdoctor_id">Doctor id</label>
				<input type="text" class="form-control" id="exampleInputdoctor_id"  placeholder="Enter doctor_id" name="doctor_id" required>
				</div>
			  <div class="form-group">
				<label for="exampleInputname"> Name</label>
				<input type="text" class="form-control" id="examplInputname" placeholder="name" name="doctor_name" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmai1">Email</label>
				<input type="lastname" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>

			  <div class="form-group">
				<label for="exampleInputcard_id_no">Mobile</label>
				<input type="text" class="form-control" id="exampleInputcard_id_no" placeholder="mobile" name="mobile" required> 
			  </div>

			  <div class="form-group">
				<label for="exampleInputcard_id_no">National Identity number</label>
				<input type="text" class="form-control" id="exampleInputcard_id_no" placeholder="Password" name="id_card_number" required>
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputqualification">Qualification</label>
				<input type="text" class="form-control" id="exampleInputqualification"  placeholder="Qualification" name="qualification"required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputexperiance">Experiance</label>
				<input type="text" class="form-control" id="exampleInputexperiance"  placeholder="Experiance" name="experience" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputspecialization">Specialization</label>
				<input type="text" class="form-control" id="exampleInputspecialization"  placeholder="specialization" name="specialization" required>
				</div>
				
				
				 <div class="form-group">
				<label for="exampleInputpmc_certificate_no">Certificate number</label>
				<input type="text" class="form-control" id="exampleInputpmc_certificate_no"  placeholder="certificate number" name="pmc_certificate_no" required>
				</div>
				
				 
				
				 <div class="form-group">
				<label for="exampleInputaddress_line">Address</label>
				<input type="text" class="form-control" id="exampleInputaddress_line"  placeholder="Enter address" name="clinic_address_line1" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputcountry">select country</label>
				<input type="text" class="form-control" id="exampleInputcountry"  placeholder="country" name="country" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputstate">State</label>
				<input type="text" class="form-control" id="exampleInputstate"  placeholder="state" name="state" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputcity">City</label>
				<input type="text" class="form-control" id="exampleInputcity"  placeholder="city" name="city" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputpincode">Pincode</label>
				<input type="text" class="form-control" id="exampleInputpincode"  placeholder="pincode" name="pincode" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputtiming_from">Timing from</label>
				<input type="time" class="form-control"   placeholder="timing_from" name="time_from" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputtiming_to">Timing to</label>
				<input type="time" class="form-control"   placeholder="Timing to" name="time_to" required>
				</div>
				
				 <div class="form-group">
				<label for="exampleInputusername">Username</label>
				<input type="text" class="form-control" id="exampleInputusername"  placeholder="username" name="username" required>
				</div>
			  
			   <div class="form-group">
				<label for="exampleInputpassword">Password</label>
				<input type="password" class="form-control" id="exampleInputpassword"  placeholder="password" name="password" required	>
				</div>
				<div class="form-group">
				<label for="exampleInputpassword">Status</label>
				<input type="text" class="form-control" id="exampleInputpassword"  placeholder="pending" name="status" readonly value='pending'>
				</div>
			  
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>