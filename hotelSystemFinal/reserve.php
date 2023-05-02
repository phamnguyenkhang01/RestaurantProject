<?php
session_start();
include "functions/conn.php";
$dayDate=date("Y-m-d");
if (isset($_SESSION['id'])){
    $uid=$_SESSION['id'];
    $sql = "INSERT INTO traffic(users,guests,dayDate) VALUES('$uid','0','$dayDate')";
    $conn->query($sql);
}
else{
$guest= random_int(100, 999);
$_SESSION['guest']=$guest;
$guid=$_SESSION['guest'];
echo "<script> window.onload = function() {
     showform();
 }; </script>";
$sql = "INSERT INTO traffic(users,guests,dayDate) VALUES('0','$guid','$dayDate')";
$conn->query($sql);
}    

?>
<!DOCTYPE html>
<html>
<head>
    <title>Alex Hotel Reservation</title>
    <link rel="icon" href="logo/icon.svg" />    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="js/functions.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body onload="showMenu();">
<?php include "header.php";?>
<?php 
    include "menu.php";
    include "popup.php";
    ?> 

<!-- Carousel -->
<div class="container-fluid bg" style="margin-top:80px;height:auto;">
<center>
<div class="row padding lineHeight">
<h1 class="fontFamily color uppercase fontSize">Table Reservation Process</h1>
<form action="functions/order.php" method="post" autocomplete="off" class="orderform">
    <div class="row"> 
    <div class="col">
    <input type="text" name="username" placeholder="Your Name" required /> <span style="color:red;font-size:2em;">&#42;</span>        
    </div>
    <div class="col">
    <input type="email" name="useremail" placeholder="Your Email" required /> <span style="color:red;font-size:2em;">&#42;</span>       
    </div>
    <div class="col">
    <input type="text" name="usernumber" placeholder="Your Number" required /> <span style="color:red;font-size:2em;">&#42;</span>       
    </div>    
    </div>
    <div class="row">
    <div class="col">
    <input type="date" name="date" placeholder="Today's Date" required /> <span style="color:red;font-size:2em;">&#42;</span>       
    </div>
    <div class="col">
    <input type="time" name="time" placeholder="Time for Dinner or Lunch" required /> <span style="color:red;font-size:2em;">&#42;</span>       
    </div>
    <div class="col">
    <input type="text" name="guests" placeholder="Number of Guests" required /> <span style="color:red;font-size:2em;">&#42;</span>        
    </div>    
    </div>    
    <div class="row" style="margin-top:5%;">
    <div class="col">
    <input type="radio" name="useroption" value="user" required /> <span class="check">User</span>&nbsp;&nbsp;        
    <input type="radio" name="useroption" value="guest" required /> <span class="check">Guest</span>        
    </div>
    <div class="col">
    </div>
    <div class="col">
    <input type="submit" name="submit" value="Reserve Table" class="btn btn-success" />        
    </div>    
    </div>
<div class="row">
<ul style="text-align:left;margin-top:3%;color:white;">
<li><span style="color:red;">&#42;</span> is for required fields</li>
<li>You must provide correct information to reserve a table</li> 
<li>10&#36; will be charged in case of late comming</li> 
</ul>
</div>    
</form>    
</div>
</center>
</div>
<div class="row" style="background:#f1f1f1;width:100%;padding:2%;">
<p style="text-align:center;">Copyright &copy; <?php date('Y');?> Alex Hotel</p>    
</div>
</body>
</html> 