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
    			margin: 0px 68px
			}
		</style>
		
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body class="pnr-print">
	<header>
			<img src="images/bookmyflight.svg" alt="logo" class = "logo" height="40%">
			<nav class="navbar navbar-custom">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li> 
						<li><a href="customer_homepage.php">Dashboard</a></li>
						<li><a href="pnr.php">Print Ticket</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="index.html#contact">Contact Us</a></li> 
						<li><a href="index.html">Logouts</a></li>
					</ul>     
				</div>              
			</nav>
		</header>
		<form action="cancel_booked_tickets_form_handler.php" method="post" style="padding-top: 15%;margin-left: 40%;">
			<h2>CANCEL BOOKED TICKETS</h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 30px;">
				<tr>
					<td class="fix_table"><input type="text" name="pnr" required placeholder="Enter the PNR"></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</body>
</html>