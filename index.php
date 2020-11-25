<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>login page / register</title>
<link rel="stylesheet" href="css/style.CSS">
</head>
<body style="background-color:#95a5a6">
	<div id="main-wrapper">
		<center>
		<h2 >Login / Sign Up</h2>
		<img src="image/img1.jpg" id="imgsrc">
		</center>
	<form class="myform"  method="post">
		<label >Username</label><br>
		<input name="user" type="text" id="inputvalues" placeholder="typeusername" required><br>
		<label>Password</label><br>
		<input name="pass" type="password" id="inputvalues" placeholder="type password here" required><br>
		<input name="login" type="submit" id="login_btn" value="Login"><br>
		<a href="registration.php"><input type="button" id="register_btn" value="Register"><br>
	</form>
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['user'];
			$password=$_POST['pass'];
			$query="select * from userinfotable WHERE username='$username' AND password='$password'";
			$querry_run=mysqli_query($con,$query);
			if(mysqli_num_rows($querry_run)>0)
			{
				//valid
				$_SESSION['username']=$username;
				header('location:home.php');
				
			}
			else{
				echo '<script type="text/javascript"> alert("User doesnot exist")</script>';
			}
			
		}
	?>
	</div>
</body>
</html>
