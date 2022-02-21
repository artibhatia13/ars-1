<?php
session_start();

$con=mysqli_connect("localhost","root","","airline_reservation");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['pnr'];

 if($id!='')
 {
   $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
   $res=mysqli_fetch_row($query);
   $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
   $res0=mysqli_fetch_row($query0);
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
if($res0)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheckall.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Wrong PNR Number")';
    echo '</script>';
 
 }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

       
        <title></title>
        
        
        <link rel="stylesheet" type="text/css" href="styles.css"></link> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body class="pnr allpagebg">
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
		<div class="formContainer">
            <form id="index" action="pnrall.php" method="post">
                <h1>Check PNR</h1>
                <input type="text" class="input" id="u_id" name="pnr" class="form-control"  placeholder="Enter Your PNR Number" style="padding:1em; background-color:#E8F0FE;"><br>
                <input type="submit" id="u_sub" name="u_sub" value="Check" class="toggle btn btn-primary"  style="margin-top:1em"><br>        
            </form> 
        </div> 
    </body>
</html>
