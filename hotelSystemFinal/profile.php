<?php 
session_start();
include "functions/conn.php";
if (isset($_SESSION['number']) && isset($_SESSION['password'])) {
    $u=$_SESSION['number'];
    $p=$_SESSION['password'];
    $que = "SELECT * FROM users WHERE uNumber='$u' AND uPassword='$p'";

        $result = $conn->query($que);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
                $uid = $row['uId'];
                $uname = $row['uName'];
                $_SESSION['id']=$uid;
        }
    }
}
else{
    header("location:../login.php");                                                   
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Alex Hotel</title>
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
<body onload="showMenu()">
<header>
            <div class="row" style="width: 100%;">
                <div class="col">
                    <center>
                        <a href="index.php" style="text-decoration:none;"><img src="logo/logo.png" class="logo" /></a>                    
                    </center>
                </div>
                <div class="col">
                    <ul class="headul">
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-weight: bold;"></i></a></li>
                        <li><a href="reserve.php">Reservation</a></li>
                        <li><i class="fa fa-search showsearch" aria-hidden="true" style="font-weight: bold;"></i></li>
                    </ul>    
                </div>
                <div class="col">
                    <button class="menubtn">Menu <i class="fa fa-angle-down" aria-hidden="true" style="font-weight: bold;"></i></button>
                    <a href="functions/logout.php"><button class="menubtn1">Logout</button></a>                    
                </div>    
            </div>    
</header>
<div class="row searchBar" id="searchBar">
<center>
<button class="cross1" onclick="hideSearch()"><i class="fa fa-times" aria-hidden="true"></i></button>     
<form action="functions/search.php" method="post" autocomplete="off">
<div class="row" style="margin-top:3%;">
     <div class="input-group mb-3">
        <input type="date" name="date" required="required">         
      <div class="input-group-append">
        <input type="submit" value="Search" />
      </div>
    </div>
</div>
</form>    
</center>
</div>    
<div class="modal" id="myModal" style="margin-top:10%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Reserve Table</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <center>
        <div class="row" style="padding:2%;">
            <div class="col">
                <a href="reserve.php" style="text-decoration:none;color:#fff"><button class="optionBtn"><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i></button></a>
            <p>Guest</p>    
            </div>  
            <div class="col">
                <a href="login.php" style="text-decoration:none;color:#fff"><button class="optionBtn"><i class="fa fa-user fa-2x" aria-hidden="true"></i></button></a>
            <p>User</p>    
            </div>  
        </div>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>    
<?php require "menu.php";?>    
<div class="container-fluid bg" style="margin-top:80px;height:auto;padding:2%;">
<div class="row padding lineHeight">
<center>
<img src="photos/profile.png" class="profileimg" />    
<h1 class="fontFamily color uppercase fontSize"  style="margin-top:2%">Welcome Mr <?php echo $uname;?></h1>
<button class="btn btn-success profilebtn" onclick="orders()">My Orders</button>    
<button class="btn btn-success profilebtn" onclick="charges()">Charges</button>        
</center>
</div>
<div class="row padding lineHeight" id="orders">
<center>
<h1>Orders</h1>
<div class="row">
<?php
include "functions/conn.php";
    $que = "SELECT * FROM orders WHERE uid='$uid'";
        $result = $conn->query($que);
        if ($result->num_rows > 0) {
            echo "
            <center>
            <table class='tablet'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Date</th>
            <th>Time</th>
            <th>Total Guests</th>
            <th>Dinner number</th>
            <th>Table Number</th>        
            </tr>
            ";
            while($row = $result->fetch_assoc()) {
            $id1=$row['uid'];             
            $name1=$row['gName'];
            $email1=$row['gEmail'];
            $number1=$row['gNumber'];
            $date1=$row['gDate'];
            $time1=$row['gTime'];
            $totalguest1=$row['totalGuests'];
            $dinnerNum1=$row['dinnerNum']; 
            $tableNum1=$row['tableNum'];     
            if($uid==$id1) {
            echo "
            <tr>
            <td>$id1</td>
            <td>$name1</td>
            <td>$email1</td>
            <td>$number1</td>
            <td>$date1</td>
            <td>$time1</td>
            <td>$totalguest1</td>
            <td>$dinnerNum1</td>
            <td>$tableNum1</td>
            </tr>
            ";    
        }
                
        }
        echo "
        </table>
        </center>
        ";                
    }  
    $conn->close();
?>    
</div>    
</center>
</div>
<div class="row padding lineHeight" id="charges">
<center>
    <h1>Late Charges</h1>
<div class="row">
<?php
include "functions/conn.php";
    $que = "SELECT * FROM orders WHERE uid='$uid'";
        $result = $conn->query($que);
        if ($result->num_rows > 0) {
            echo "
            <center>
            <table class='tablet'>
            <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Dinner number</th>
            <th>Charges</th>        
            </tr>
            ";
            while($row = $result->fetch_assoc()) {
            $id1=$row['uid']; 
            $name1=$row['gName'];
            $date1=$row['gDate'];
            $time1=$row['gTime'];
            $dinnerNum1=$row['dinnerNum'];           

                $ttime = strtotime(date('G:i'));
                $deadtime = strtotime($time1);
                if($ttime>$deadtime){
                $charges1="10$";    
                $que1="UPDATE orders SET charges='$charges1' WHERE dinnerNum='$dinnerNum1'"; 
                $conn->query($que1);    
                    
                }
                else{
                $charges1="0$";    
                $que1="UPDATE orders SET charges='$charges1' WHERE dinnerNum='$dinnerNum1'"; 
                $conn->query($que1);    
                }                
        
            if($uid==$id1) {
            echo "
            <tr>
            <td>$name1</td>
            <td>$date1</td>
            <td>$time1</td>
            <td>$dinnerNum1</td>
            <td>$charges1</td>            
            </tr>
            ";    
        }                
        }
        echo "
        </table>
        </center>
        ";                
    }  
    $conn->close();
?>    
</div>    
</center>
</div>    
</div>
<div class="row" style="width:100%;padding:2%;height:100px;">
<p style="text-align:center;">Copyright &copy; <?php date('Y');?> Alex Hotel</p>    
</div>  
</body>
</html>