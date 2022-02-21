<?php
	session_start();
?>
<html>
	<head>
		<title>
			Enter Travel/Ticket Details
		</title>
		<style>
			input {
				outline: none;
				border: none;
				height:2.5em;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=number] {
				outline: none;
				border: none;
				height:2.5em;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=submit] {
				outline: none;
				border: none;
				height:2.5em;
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 500px
			}
			input[type=radio] {
				outline: none;
				border: none;
    			margin-right: 30px;
			}
			select {
				outline: none;
				border: none;
				height:2.5em;
    			border-radius: 4px;
    			padding: 6.5px 15px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet">
	</head>
	<body class="cloudbg">
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
		<div style="margin-left:3em;">
			<?php
				$no_of_pass=$_SESSION['no_of_pass'];
				$class=$_SESSION['class'];
				$count=$_SESSION['count'];
				$flight_no=$_POST['select_flight'];
				$_SESSION['flight_no']=$flight_no;
				//$pass_name=array();
				echo "<h2>ADD PASSENGERS DETAILS</h2>";
				echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
				while($count<=$no_of_pass)
				{
						echo "<p><strong>PASSENGER ".$count."<strong></p>";
						echo "<table cellpadding=\"0\">";
						echo "<tr>";
						echo "<td class=\"fix_table_short\">Passenger's Name</td>";
						echo "<td class=\"fix_table_short\">Passenger's Age</td>";
						echo "<td class=\"fix_table_short\">Passenger's Gender</td>";
						echo "<td class=\"fix_table_short\">Passenger's Inflight Meal</td>";
						echo "<td class=\"fix_table_short\">Passenger's Frequent Flier ID (if applicable)</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_name[]\" required></td>";
						echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_age[]\" required></td>";
						echo "<td class=\"fix_table_short\">";
						echo "<select name=\"pass_gender[]\">";
						echo "<option value=\"male\">Male</option>";
						echo "<option value=\"female\">Female</option>";
						echo "<option value=\"other\">Other</option>";
						echo "</select>";
						echo "</td>";
						echo "<td class=\"fix_table_short\">";
						echo "<select name=\"pass_meal[]\">";
						echo "<option value=\"yes\">Yes</option>";
						echo "<option value=\"no\">No</option>";
						echo "</select>";
						echo "</td>";
						echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_ff_id[]\"></td>";
						echo "</tr>";
						echo "</table>";
						echo "<br><hr>";
						$count=$count+1;
					}
					echo "<br><h2>ENTER TRAVEL DETAILS</h2>";
					echo "<table cellpadding=\"5\">";
					echo "<tr>";
					echo "<td class=\"fix_table_short\">Do you want access to our Premium Lounge?</td>";
					echo "<td class=\"fix_table_short\">Do you want to opt for Priority Checkin?</td>";
					echo "<td class=\"fix_table_short\">Do you want to purchase Travel Insurance?</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td class=\"fix_table\">";
					echo "Yes <input type='radio' name='lounge_access' value='yes' checked/> No <input type='radio' name='lounge_access' value='no'/>";
					echo "</td>";
					echo "<td class=\"fix_table\">";
					echo "Yes <input type='radio' name='priority_checkin' value='yes' checked/> No <input type='radio' name='priority_checkin' value='no'/>";
					echo "</td>";
					echo "<td class=\"fix_table\">";
					echo "Yes <input type='radio' name='insurance' value='yes' checked/> No <input type='radio' name='insurance' value='no'/>";
					echo "</td>";
					echo "</tr>";
					echo "</table>";
					echo "<br><br>";
					echo "<input type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\">";
					echo "</form>";
			?>
		</div>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>