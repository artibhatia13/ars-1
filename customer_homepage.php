<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>
<html>
	<head>
		<title>
			Welcome Customer
		</title>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	</head>
	<body class="custhome allpagebg">
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
		<!--<img class="logo" src="images/irctc.jpg"/> 
		<h1 id="title">
			IRCTC Airways
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
<li><a href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Print Ticket</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>-->
		<div style="display:flex;justify-content:center;">
			<div class="custWrapper">
				<?php
					echo "<h2>Welcome ".$_SESSION['login_user']."!</h2>";
					require_once('Database Connection file/mysqli_connect.php');
					$query="SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
					mysqli_stmt_fetch($stmt);
					if($cnt==1)
					{
						echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
					}
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
				?>
				<ul class="customerFunctions">
					<li class="admin_func" style="background-color:#f48fb1;"><a href="book_tickets.php">
						<img src="images/group.svg" alt="icon" style="height:2.3em;background-color:#f48fb1;">
						<p style="margin:-1.5em 0 0 3.5em">
							Book Flight Tickets
						</p>
					</a></li>
					<li class="admin_func" style="background-color:#64b5f6;"><a href="view_booked_tickets.php">
						<img src="images/vector.svg" alt="icon" style="height:1.7em;">
						<p style="margin:-1.5em 0 0 3.5em;">
							View Booked Flight Tickets
						</p>
					</a></li>
					<li class="admin_func" style="background-color:#ffb74d;"><a href="pnr.php">
						<img src="images/print.svg" alt="icon" style="height:2em;">
						<p style="margin:-1.5em 0 0 3.5em">
							Print Booked Ticket
						</p>
					</a></li>
					<li class="admin_func" style="background-color:#4db6ac;"><a href="cancel_booked_tickets.php">						
						<img src="images/cancel.svg" alt="icon" style="height:2em;">
						<p style="margin:-1.5em 0 0 3.5em">
							Cancel Booked Flight Tickets
						</p>
					</a></li>
				</ul>
			</div>
		</div>
		<!-- <table cellpadding="20" style="margin-top: 20%;margin-left: 40%; margin-top: 10%;font-size: 25px;">
			<tr>
				<td class="admin_func"><a href="book_tickets.php" ><i class="fa fa-plane" aria-hidden="true"></i> Book Flight Tickets</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View Booked Flight Tickets</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="pnr.php"><i class="fa fa-plane" aria-hidden="true"></i> Print Booked Ticket</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="cancel_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Cancel Booked Flight Tickets</a>
				</td>
			</tr>
		</table> -->
		<!--Following data fields were empty!
			...
			
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS

		-->
	</body>
</html>