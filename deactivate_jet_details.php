<?php
	session_start();
?>
<html>
	<head>
		<title>
			Deactivate Aircraft
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
    			margin: 0px 67px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet">

	</head>
	<body class="allpagebg">
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
		<div id="whitebg" style="background-color: #f1f6fd;color: #424242;padding: 2em 3em;border-radius: 8px;margin-top:6%;">

		<form action="deactivate_jet_details_form_handler.php" method="post">
			<h2>ENTER THE AIRCRAFT TO BE DEACTIVATED</h2>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Aircraft has been successfully deactivated.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" >
				<tr>
					<td class="fix_table">Enter a valid Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Deactivate" name="Deactivate">
			</div>
		</form>
		</div>
			</div>
	</body>
</html>