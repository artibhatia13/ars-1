<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	</head>
	<body class="login allpagebg">
		<header class="otherpageNav">
			<a href="index.html">
				<img src="images/bookmyflight.svg" alt="logo" class="logo" height="40%">
			</a>
			<nav class="navbar">
				<ul>
					<li><a href="customer_homepage.php">Book</a></li>
					<li><a href="pnrall.php">Check PNR</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="index.html">Contact Us</a></li>
					<li><a href="login_page.php">Login</a></li>
					<li><a href="new_user.php">Sign Up</a></li>
				</ul>
			</nav>
		</header>
		<br><br><br>
		<div class="formContainer">
			<form class="float_form" action="login_handler.php" method="POST">
				<h1 class="login-title">Login</h1><br>
				<label>Username:</label><br>
				<input class="input" type="text" name="username" placeholder="Enter your username" required><br><br>
				<label>Password:</label><br>
				<input class="input" type="password" name="password" placeholder="Enter your password" required><br><br>
				<label>User Type:</label><br>
				<div class="radio_input">
					<input type='radio' name='user_type' value='Customer' checked/> Customer 
					<input type='radio' name='user_type' value='Administrator'/> Administrator 
				</div>				
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
				<br><br>
				<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
			</form>
		</div>
	</body>
</html>