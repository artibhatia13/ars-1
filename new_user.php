<html>
	<head>
		<title>
			Create New User Account
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 135px
			}
		</style>

		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body class="new_user">
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
		<div style="width: 100%;height: 100%;overflow: hidden;background: rgba(0, 0, 0,0.5);">
		<br>
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_form" style="margin-left: 2%; margin-top: -1%;">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
			<br>
			<table cellpadding='80'>
				<tr> <td>
			<table cellpadding='10'>
				<strong>ENTER LOGIN DETAILS</strong>
				<tr>
					<td>Enter a valid username  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your desired password  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your email ID</td>
					<td><input type="email" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
		</td>
		<td>
			<table cellpadding='10'>
				<strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
				<tr>
					<td>Enter your name  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your phone no.  </td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your address </td>
					<td><input type="text" name="address" required><br><br></td>
				</tr>
			</table>
		
			<br>
		</td>
		</tr>
		</table>
			<input type="submit" value="Submit" name="Submit" id="new_user_btn">
			<br>
		</form>
		</div>
	</body>
</html>