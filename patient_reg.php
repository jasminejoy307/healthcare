
<!-------patient registration page------------------->

<?php include('header.php');?>
	
<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">	
			<form name="patient_registration" action="patient_reg1.php" method="POST"> 
			<h2>Patient Resgistration</h2><h6>Are you a Doctor?<a href="doctor_reg.php">Register Here</a></h6>
			
			  <div class="form-group">
				<label for="exampleInputpatient_id">Patient id</label>
				<input type="text" class="form-control"  name="patient_id" placeholder="Enter patient_id" required>
				
			  </div>
			  <div class="form-group">
				<label for="exampleInputfirstname">First Name</label>
				<input type="text" class="form-control"    name="first_name"placeholder="firstname" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Last Name</label>
				<input type="text" class="form-control"  name="last_name" placeholder="Enter lastname" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Gender</label>
				<input type="text"   class="form-control"     name="gender" placeholder="gender" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputage">Age</label>
				<input type="text"     class="form-control"         name="age" placeholder="age" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputemail">Email</label>
				<input type="text"   class="form-control"      name="email" placeholder="email" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputmobile">Mobile</label>
				<input type="text" class="form-control"       name="mobile" placeholder="mobile" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputaddress">Address</label>
				<input type="text" class="form-control"      name="address" placeholder="address" required>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputg">National id number</label>
				<input type="text" class="form-control" name="id_card_no" placeholder="national id number" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Medical history</label>
				<input type="text" class="form-control"       name="medical_history" placeholder="medical history" required>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputgender">Username</label>
				<input type="text" class="form-control"       name="username" placeholder="username" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Password</label>
				<input type="text" class="form-control"       name="password" placeholder="password" required>
			  </div>
			  
			
			  <button type="submit" class="btn btn-primary" name="submit">Register</button>
			</form>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>
</body>
</html>