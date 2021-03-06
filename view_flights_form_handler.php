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
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet">
	</head>
	<body class="view-flight cloudbg">
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
		<div style="display:flex;justify-content:center;margin-top:4em;">
			<div style="background-color:white;padding:1em 2em;border-radius:8px;">
				<h2>AVAILABLE FLIGHTS</h2>
				<?php
					if(isset($_POST['Search']))
					{
						$data_missing=array();
						if(empty($_POST['origin']))
						{
							$data_missing[]='Origin';
						}
						else
						{
							$origin=$_POST['origin'];
						}
						if(empty($_POST['destination']))
						{
							$data_missing[]='Destination';
						}
						else
						{
							$destination=$_POST['destination'];
						}

						if(empty($_POST['dep_date']))
						{
							$data_missing[]='Departure Date';
						}
						else
						{
							$dep_date=trim($_POST['dep_date']);
						}
						if(empty($_POST['no_of_pass']))
						{
							$data_missing[]='No. of Passengers';
						}
						else
						{
							$no_of_pass=trim($_POST['no_of_pass']);
						}

						if(empty($_POST['class']))
						{
							$data_missing[]='Class';
						}
						else
						{
							$class=trim($_POST['class']);
						}

						if(empty($data_missing))
						{
							$_SESSION['no_of_pass']=$no_of_pass;
							$_SESSION['class']=$class;
							$count=1;
							$_SESSION['count']=$count;
							$_SESSION['journey_date']=$dep_date;
							require_once('Database Connection file/mysqli_connect.php');
							if($class=="economy")
							{
								$query="SELECT flight_no,from_city,to_city,departure_date,departure_time,arrival_date,arrival_time,price_economy FROM Flight_Details where from_city=? and to_city=? and departure_date=? and seats_economy>=? ORDER BY  departure_time";
								$stmt=mysqli_prepare($dbc,$query);
								mysqli_stmt_bind_param($stmt,"sssi",$origin,$destination,$dep_date,$no_of_pass);
								mysqli_stmt_execute($stmt);
								mysqli_stmt_bind_result($stmt,$flight_no,$from_city,$to_city,$departure_date,$departure_time,$arrival_date,$arrival_time,$price_economy);
								mysqli_stmt_store_result($stmt);
								if(mysqli_stmt_num_rows($stmt)==0)
								{
									echo "<h3>No flights are available !</h3>";
								}
								else
								{
									echo "<form action=\"book_tickets2.php\" method=\"post\">";
									echo "<table cellpadding=\"10\"";
									echo "<tr><th>Flight No.</th>
									<th>Origin</th>
									<th>Destination</th>
									<th>Departure Date</th>
									<th>Departure Time</th>
									<th>Arrival Date</th>
									<th>Arrival Time</th>
									<th>Price(Economy)</th>
									<th>Select</th>
									</tr>";
									while(mysqli_stmt_fetch($stmt)) {
										echo "<tr>
										<td>".$flight_no."</td>
										<td>".$from_city."</td>
										<td>".$to_city."</td>
										<td>".$departure_date."</td>
										<td>".$departure_time."</td>
										<td>".$arrival_date."</td>
										<td>".$arrival_time."</td>
										<td>&#x20b9; ".$price_economy."</td>
										<td><input type=\"radio\" name=\"select_flight\" value=\"".$flight_no."\"></td>
										</tr>";
									}
									echo "</table> <br>";
									echo "<input type=\"submit\" value=\"Select Flight\" name=\"Select\">";
									echo "</form>";
								}
							}
							else if($class="business")
							{
								$query="SELECT flight_no,from_city,to_city,departure_date,departure_time,arrival_date,arrival_time,price_business FROM Flight_Details where from_city=? and to_city=? and departure_date=? and seats_business>=? ORDER BY  departure_time";
								$stmt=mysqli_prepare($dbc,$query);
								mysqli_stmt_bind_param($stmt,"sssi",$origin,$destination,$dep_date,$no_of_pass);
								mysqli_stmt_execute($stmt);
								mysqli_stmt_bind_result($stmt,$flight_no,$from_city,$to_city,$departure_date,$departure_time,$arrival_date,$arrival_time,$price_business);
								mysqli_stmt_store_result($stmt);
								if(mysqli_stmt_num_rows($stmt)==0)
								{
									echo "<h3>No flights are available !</h3>";
								}
								else
								{
									echo "<form action=\"book_tickets2.php\" method=\"post\">";
									echo "<table cellpadding=\"10\"";
									echo "<tr><th>Flight No.</th>
									<th>Origin</th>
									<th>Destination</th>
									<th>Departure Date</th>
									<th>Departure Time</th>
									<th>Arrival Date</th>
									<th>Arrival Time</th>
									<th>Price(Business)</th>
									<th>Select</th>
									</tr>";
									while(mysqli_stmt_fetch($stmt)) {
										echo "<tr>
										<td>".$flight_no."</td>
										<td>".$from_city."</td>
										<td>".$to_city."</td>
										<td>".$departure_date."</td>
										<td>".$departure_time."</td>
										<td>".$arrival_date."</td>
										<td>".$arrival_time."</td>
										<td>&#x20b9; ".$price_business."</td>
										<td><input type=\"radio\" name=\"select_flight\" value=".$flight_no."></td>
										</tr>";
									}
									echo "</table> <br>";
									echo "<input type=\"submit\" value=\"Select Flight\" name=\"Select\">";
									echo "</form>";
								}
							}	
							mysqli_stmt_close($stmt);
							mysqli_close($dbc);
							// else
							// {
							// 	echo "Submit Error";
							// 	echo mysqli_error();
							// }
						}
						else
						{
							echo "The following data fields were empty! <br>";
							foreach($data_missing as $missing)
							{
								echo $missing ."<br>";
							}
						}
					}
					else
					{
						echo "Search request not received";
					}
				?>
			</div>
		</div>
	</body>
</html>