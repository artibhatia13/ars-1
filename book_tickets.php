<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
		</title>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	</head>
	<body class="book allpagebg">
		<header>
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
		<div class="formContainer">
			<form action="view_flights_form_handler.php" method="post">
				<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>

				<div class="bookForm_wrapper" style="display:flex;">
					<div class="book_row1" style="flex:0.5;">
						<label>Enter the Origin<label><br>
						<input class="book_input" list="origins" name="origin" placeholder="From" required>
							<datalist id="origins">
								<option value="bangalore">
							</datalist><br><br>

						<label>Enter the Departure Date</label><br>
						<input class="book_input" type="date" name="dep_date" min=
							<?php 
								$todays_date=date('Y-m-d'); 
								echo $todays_date;
							?> 
							max=
							<?php 
								$max_date=date_create(date('Y-m-d'));
								date_add($max_date,date_interval_create_from_date_string("90 days")); 
								echo date_format($max_date,"Y-m-d");
							?> required><br><br>
						
						<label class="fix_table">Enter the Class</label><br>
						<select class="book_input" name="class">
							<option value="economy">Economy</option>
							<option value="business">Business</option>
						</select>
					</div>
					<div class="book_row2" style="flex:0.5;margin-left:2em;">
						<label>Enter the Destination<label><br>
						<input class="book_input" list="destinations" name="destination" placeholder="To" required>
							<datalist id="destinations">
								<option value="mumbai">
								<option value="mysore">
								<option value="mangalore">
								<option value="chennai">
								<option value="hyderabad">
							</datalist><br><br>						

						<label>Enter the No. of Passengers</label><br>
						<input class="book_input" type="number" name="no_of_pass" placeholder="Eg. 5" required>
					</div>
				</div>								
				<br>
				<input type="submit" value="Search" name="Search">
			</form>
		</div>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>
