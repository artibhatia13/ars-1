<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome Administrator
		</title>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet">

	</head>
	<body class="custhome allpagebg">
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
		<div style="display:flex;justify-content:center;margin-top:-3em;">
			<div class="custWrapper">
				<h2>Welcome Administrator!</h2>
					<ul class="customerFunctions">
						<li class="admin_func" style="background-color:#f48fb1;"><a href="admin_view_booked_tickets.php">
							<img src="images/group.svg" alt="icon" style="height:2.3em;background-color:#f48fb1;">
							<p style="margin:-1.5em 0 0 3.5em">
								View List of Booked Tickets for a Flight
							</p>
						</a></li>
						<li class="admin_func" style="background-color:#64b5f6;"><a href="add_flight_details.php">
							<img src="images/vector.svg" alt="icon" style="height:1.7em;">
							<p style="margin:-1.5em 0 0 3.5em;">
								Add Flight Schedule Details
							</p>
						</a></li>
						<li class="admin_func" style="background-color:#ffb74d;"><a href="delete_flight_details.php">
							<img src="images/cancel.svg" alt="icon" style="height:2em;">
							<p style="margin:-1.5em 0 0 3.5em">
								Delete Flight Schedule Details
							</p>
						</a></li>
						<li class="admin_func" style="background-color:#4db6ac;"><a href="add_jet_details.php">						
							<img src="images/vector.svg" alt="icon" style="height:2em;">
							<p style="margin:-1.5em 0 0 3.5em">
								Add Aircrafts Details
							</p>
						</a></li>
						<li class="admin_func" style="background-color:#ba68c8;"><a href="activate_jet_details.php">						
							<img src="images/group.svg" alt="icon" style="height:2em;">
							<p style="margin:-1.5em 0 0 3.5em">
								Activate Aircraft
							</p>
						</a></li>
						<li class="admin_func" style="background-color:#ffd54f;"><a href="deactivate_jet_details.php">						
							<img src="images/cancel.svg" alt="icon" style="height:2em;">
							<p style="margin:-1.5em 0 0 3.5em">
								Deactivate Aircraft
							</p>
						</a></li>
					</ul>
			</div>
		</div>
		
	</body>
</html>