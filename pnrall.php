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
    </head>
    <body class="pnr">
    <header>
			<img src="images/bookmyflight.svg" alt="logo" class = "logo" height="40%">
			<nav class="navbar navbar-custom">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li> 
						<li><a href="login_page.php">Book</a></li>
						<li><a href="pnrall.php">Check PNR</a></li>
						<li><a href="login_page.php">Login</a></li>
						<li><a href="new_user.php">Sign Up</a></li> 
						<li><a href="index.html#contact">Contact Us</a></li>
						<li><a href="about.html">About Us</a></li> 
					</ul>     
				</div>              
			</nav>
		</header>
        <div class="pnrbg">
        <form id="index" action="pnrall.php" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        
                  </div>
                 </div>    
             
        
            
            
                <div  id="divtop">
<center>
                    
                        <br> <br><br>
                            <div id="dmain"  > 
                               <center><img src="images/bookmyflight.svg" width="50%" height="70%" class="pnr_logo"></center>
                                    <input type="text" id="u_id" name="pnr" class="form-control" style="width:500px; margin-left: 66px; ;margin-top: -10%; height: 30px;" placeholder="Enter Your PNR Number"><br>
                                   
                                    <input type="submit" id="u_sub" name="u_sub" value="Check" class="toggle btn btn-primary" style="width:100px; margin-left: 70px; margin-top: -5%;"><br>
                                   
                             </div>
                     </div>
                    </div>
               </div>
            </div>  
            </div>
        </form> 
        </div> 
       </body>
</html>
