<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <link rel="stylesheet" type="text/css" href="styles.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
      <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/bootstrap.min.js"></script>
      <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
      <script type="text/javascript">
          function printpage()
          {
          var printButton = document.getElementById("print");
          printButton.style.visibility = 'hidden';
          window.print()
            printButton.style.visibility = 'visible';
            }
      </script>                
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
      </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <center>  
                <table class="table table-bordered" style="font-family: Verdana">
                  <center><font style="font-family:Verdana; font-size:18px;">
                    Airport Authority Of India<br>Passanger Details against PNR Number
                  </font></center>
                  <br><br>
                  <center><font style="font-family:Arial Black; font-size:20px;">
                    ______________________________________________________________________
                  </font></center>
                  </td>
                    <td colspan="2" width="3%" >
                   <?php
                    $picfile_path ='images/';
                    $result1 = mysqli_query($con,"SELECT * FROM passengers where ='".$_SESSION['user']."'");
                    while($row1 = mysqli_fetch_array($result1))
                      {                  
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        echo "<center><img src='images/maxx.jpg' class='img-thumbnail' width='180px' style='height:180px;'></center>";
                        echo"<div>";
                      }
                   ?>
                        </td>
                 </tr>       
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">PNR : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>
                <tr>
                    <td> <font style="font-family: Verdana;">Passenger No : </font> </td>
                    <td colspan="3"> <?php echo ''. $row[0]. '   ' ?>
                </tr>
                  <tr>
                    <td > <font style="font-family: Verdana;"> Name</font>  </td>
                    <td colspan="3"> <?php echo ''. $row[2]. '   ' ?><br>
                    <?php echo ' Age - '.$row[3] ?></td>
                  </tr>
                  <tr>
                    <td><font style="font-family: Verdana;"> Gender</font></td>
                    <td  colspan="3"><?php echo $row[4] ?> </td>
                   </tr>
                  <tr>
                    <td> <font style="font-family: Verdana;">Meail Choice</font></td>
                    <td> <?php echo $row[5] ?></td>
                    <td><font style="font-family: Verdana;"> Frequent Flier No. (If any)</font></td>
                    <td> <?php echo $row[6] ?> </td>
                  </tr>
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
    <center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
<CENTER><a href="pnr.php">Check other PNR</a></center>
    </body>
</html>


 
            
    </body>
</html>


                     