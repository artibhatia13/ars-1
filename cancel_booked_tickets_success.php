
<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
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
    			margin: 0px 127px
			}
		</style>
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"/> -->
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet">
	</head>
	<body class="book_success cloudbg">
		<header>
			<a href="index.html">
				<img src="images/bookmyflight.svg" alt="logo" class="logo" height="40%">
			</a>
			<nav class="navbar">
				<ul>
					<li><a href="customer_homepage.php">Book</a></li>
					<li><a href="admin_homepage.php">Admin</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="index.html">Contact Us</a></li>
					<li><a href="login_page.php">Login</a></li>
					<li><a href="new_user.php">Sign Up</a></li>
				</ul>
			</nav>
		</header>
		<div style="margin:4em 28%;width:40em;">
			<div class="message">
				<h2>CANCEL BOOKED TICKETS</h2>				
				<img src="images/circle_tick.png" alt="tick" style="height:7em;"><br><br>
				<h3 style='padding-left: 40px;'>Your ticket has been cancelled successfully.<br><br>Your amount of &#x20b9; <?php echo $_SESSION['refund_amount']?> will be refunded to your bank account (Cancellation charge on 15% of your ticket amount has been deducted).</td>
			</div>
		</div>
		
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>