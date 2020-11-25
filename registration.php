<?php
require "dbconfig/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/style.CSS">
</head>
<body style="background-color:#95a5a6">
	<div id="main-wrapper">
		<center>
		<h2 >Sign Up</h2>
		<img src="image/img1.jpg" id="imgsrc">
		</center>
	<form class="myform" action="registration.php" method="post">
		<label >Username</label><br>
		<input name="username" type="text" id="inputvalues" placeholder="typeusername" required><br>
		<label>Password</label><br>
		<input name="password" type="password" id="inputvalues" placeholder="type password" required><br>
		<label>Confirm Password</label><br>
		<input name="cpassword" type="password" id="inputvalues" placeholder="confirm password " required><br>
		<input name="submit-btn" type="submit" id="signup-btn" value="Sign Up"><br>
		<a href="index.php" ><input name="backtype-btn" type="button" id="back-btn" value="Back"><br>
	</form>
	</div>
	<?php
		if(isset($_POST['submit-btn']))
		{
			//echo '<script type="text/javascript"> alert("submit button clicked")</script>';
			$username= $_POST['username'];
			$password= $_POST['password'];
			$cpassword= $_POST['cpassword'];
			
			if($password==$cpassword){
				$query="select * from userinfotable where username='$username'";
				$querry_run=mysqli_query($con,$query);
				
				if(mysqli_num_rows($querry_run)>0){
					//this username exist
					echo '<script type="text/javascript"> alert("This username already exist")</script>';
				}
				else{
					$query="insert into userinfotable values('$username','$password')";
					$querry_run=mysqli_query($con,$query);
					
					
					if($querry_run)
					{
						echo '<script type="text/javascript"> alert("User Registered sucessfully....Go to login page")</script>';
					}
					else{
						echo '<script type="text/javascript"> alert("Erorr !")</script>';
					}
				}
			}
			else{
				echo '<script type="text/javascript"> alert("enter the password correctly")</script>';
			}
		}
	?>
</body>
</html>