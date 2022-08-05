<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
body {
  background-image: url("back.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	  <div class="input-group">
  	  <label>Contact</label>
  	  <input type="contact" name="contact">
  	</div>
	<div class="input-group">
  	  <label>Job Description</label>
  	  <input type="job" name="jobdescription">
  	</div>
	<div class="input-group">
  	  <label>Job Experience</label>
  	  <input type="experience" name="experience">
  	</div>
	<div class="input-group">
  	  <label>Identification Card</label>
  	  <input type="identity" name="identity">
  	</div>
	  <div class="input-group">
  	  <label>Social Media</label>
  	  <input type="media" name="media">
  	</div>
  <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

</body>
</html>