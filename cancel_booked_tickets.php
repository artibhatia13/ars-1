<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
		</title>
		<style>
			input[type=text] {
				border: 1.5px solid #030337;
				height:4em;
				width:30em;
				margin-left:-2.5em;
    			border-radius: 4px;    			
    			padding: 10px 30px;
			}
			input[type=submit] {
				outline: none;
				border: none;				
				margin-left:-2.5em;
    			border-radius: 4px;
				background-color: #030337;
				color: white;
    			padding: 7px 45px;
    			margin: 0px 68px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet">

	</head>
	<body class="pnr-print cloudbg">
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
		<div style="display:flex;justify-content:center;">
			<form action="cancel_booked_tickets_form_handler.php" method="post" class="cancelform">
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
		</div>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</body>
</html>