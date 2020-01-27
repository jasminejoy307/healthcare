
<!----------login page--------->

<?php include('header.php');?>
<br>
<br>
	
<div class="container">
	<div class="row py-5 ">
		<div class="col-md-4">	
		</div>
		<div class="col-md-4 ">	
			<form name="login"   action="login1.php" method="POST"> 
			<h2>Login</h2>
			  
			  <div class="form-group">
				<label for="exampleInputgender">Username</label>
				<input type="text" class="form-control" id="exampleInputgender" name="username"placeholder="username" required>
			  </div>
			  <div class="form-group">
				<label for="exampleInputgender">Password</label>
				<input type="password" class="form-control" id="exampleInputgender" name="password" placeholder="password" required>
			  </div>
			  
			  
			  
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			  <P>Don't have an account? <a href="patient_reg.php">Register</a></p>
			</form>
		</div>
			<div class="col-md-4">	
			</div>
		</div>
	</div>
</div>
</body>
</html>