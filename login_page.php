<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 60px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body class="login">
		<header>
			<img src="images/bookmyflight.svg" alt="logo" class = "logo" height="40%">
			<nav class="navbar navbar-custom">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li> 
						<li><a href="login_page.php">Book</a></li>
						<li><a href="pnrall.php">Check PNR</a></li>
						<li><a href="login_page.php">Login</a></li>
						<li><a href="new_user.php">Sign Up</a></li> 
						<li><a href="index.html#contact">Contact Us</a></li>
						<li><a href="about.html">About Us</a></li> 
					</ul>     
				</div>              
			</nav>
		</header>
		<br>
		<br>
		<br>
		<form class="float_form" style="padding-left: 40%" action="login_handler.php" method="POST">
			<fieldset>
				<legend class="login-title">Login Details</legend><br>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong>User Type:</strong><br>
				Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/>
				<br><br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login" >
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
		</form>
	</body>
</html>