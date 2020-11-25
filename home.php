<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/style.CSS">
</head>
<body style="background-color:#95a5a6">
	<div id="main-wrapper">
		<center>
		<h2 >HOME PAGE</h2> 
		<h3> WELCOME  <?php echo $_SESSION['username']; ?></h3>
		<img src="image/img1.jpg" id="imgsrc">
		</center>
	<form class="myform" action="home.php" method="post">
		<input name="logout" type="submit" id="logout-btn" value="Log Out"><br>
	</form>
	<?php   
		if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
		}
	?>
	</div>
</body>
</html>