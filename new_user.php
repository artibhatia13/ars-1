<html>
	<head>
		<title>
			Create New User Account
		</title>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	</head>
	<body class="new_user allpagebg">
		<header>
			<a href="index.html">
				<img src="images/bookmyflight.svg" alt="logo" class="logo" height="40%">
			</a>
			<nav class="navbar">
				<ul>
					<li><a href="login_page.php">Book</a></li>
					<li><a href="pnrall.php">Check PNR</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="index.html">Contact Us</a></li>
					<li><a href="login_page.php">Login</a></li>
					<li><a href="new_user.php">Sign Up</a></li>
				</ul>
			</nav>
		</header>
		<div class="formContainer" style="margin-top:2em;">
			<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_form" style="margin-left: 2%; margin-top: -1%;">
				<h1>Create new user account</h1>
				<!-- <br> -->
				<table cellpadding='40'>
					<tr> 
						<td>
							<table>
								<!-- <h5>ENTER LOGIN DETAILS</h5><br> -->
								<tr>
									<td>Username  </td>
									<td><input class="new_user_input" type="text" name="username" required><br><br></td>
								</tr>
								<tr>
									<td>Password  </td>
									<td><input class="new_user_input" type="password" name="password" required><br><br></td>
								</tr>
								<tr>
									<td>Email ID</td>
									<td><input class="new_user_input" type="email" name="email" required><br><br></td>
								</tr>
							</table>
							<br>
						</td>
						<td>
							<table>
								<!-- <h5>ENTER CUSTOMER'S PERSONAL DETAILS</h5><br> -->
								<tr>
									<td>Name  </td>
									<td><input class="new_user_input" type="text" name="name" required><br><br></td>
								</tr>
								<tr>
									<td>Phone no.  </td>
									<td><input class="new_user_input" type="text" name="phone_no" required><br><br></td>
								</tr>
								<tr>
									<td>Address </td>
									<td><input class="new_user_input" type="text" name="address" required><br><br></td>
								</tr>
							</table>		
							<br>
						</td>
					</tr>
				</table>
				<input type="submit" value="Submit" name="Submit" id="new_user_btn" style="margin-left:2em">
				<br><br>
			</form>
		<div>
	</body>
</html>