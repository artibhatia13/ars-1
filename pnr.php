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
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
if($res0)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
        <link rel="stylesheet" type="text/css" href="styles.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

       
        <title></title>
        
        
        
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
        <form id="index" action="pnr.php" method="post" style="padding-top: 5%;">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        
                  </div>
                 </div>    
             
        
            
            
                <div  id="divtop">
                    <center>
                        <br> <br><br>
                            <div id="dmain"  > 
                               <center><img src="images/bookmyflight.svg" width="300px" height="300px" ></center>
                                <br>
                                    <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 60px; margin-top: -7%; height: 5vh;" placeholder="Enter Your PNR Number"><br>
                                   
                                    <input type="submit" id="u_sub" name="u_sub" value="Print" class="toggle btn btn-primary" style="width:100px; margin-left: 70px;">
                                    <button type="button" onclick="location.href = './customer_homepage.php';" class="toggle btn btn-primary" style="width:100px; margin-left: 70px;">Back to Portal</button>
                                    <br>
                                   
                             </div>
                     </div>
                    </div>
               </div>
            </div>  
            </div>
        </form>  
       </body>
</html>
