<?php 
session_start();
include "../functions/conn.php";
if (isset($_SESSION['number']) && isset($_SESSION['password'])) {
    $u=$_SESSION['number'];
    $p=$_SESSION['password'];
    $que = "SELECT * FROM users WHERE uNumber='$u' AND uPassword='$p'";
        $result = $conn->query($que);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
                $uid = $row['uId'];
                $uname = $row['uName'];
        }
    }
}
else{
    header("location:login.php");                                                   
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Alex Hotel</title>
<link rel="icon" href="../logo/icon.svg" />    
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
<script src="../js/functions.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<style>
.searchBar form input[type="date"]{
width: 90%;
height: 50px;
background: #fff;
color: #202020;
border-radius: 5px;
border: none;
outline: none;
box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);  
padding: 2%;    
}
    .boxP{
        width: 60%;
        height: auto;
        padding: 2%;
        border: 1px solid #fff;
        border-radius: 5px;
        box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);  
    }    
</style>
</head>
<body onload="showMenu()">
<header>
    <div class="row" style="width: 100%;">
        <div class="col">
            <center>
                <a href="../index.php" style="text-decoration:none;"><img src="../logo/logo.png" class="logo" /></a>                    
            </center>
        </div>
        <div class="col">
            <ul class="headul">
                <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true" style="font-weight: bold;"></i></a></li>
                <li><i class="fa fa-search showsearch" aria-hidden="true" style="font-weight: bold;"></i></li>
            </ul>    
        </div>
        <div class="col">
            <ul class="headul">
                <li><img src="../photos/man.png" style="width:40px;height:40px;border-radius:50%;" /> <?php echo $uname;?></li>
                <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true" style="font-weight: bold;"></i></a></li>                
            </ul>    
        </div>        
    </div>    
</header>
<div class="row searchBar" id="searchBar">
<center>
<button class="cross1" onclick="hideSearch()"><i class="fa fa-times" aria-hidden="true"></i></button>     
<form action="search.php" method="post" autocomplete="off">
<div class="row" style="margin-top:3%;">
     <div class="input-group mb-3">
         <input type="date" name="date" required>        
         <div class="input-group-append">
        <input type="submit" value="Search" />
      </div>
    </div>
</div>
</form>    
</center>
</div>    
<!-- Carousel -->
<div class="container-fluid bg" style="margin-top:80px;height:auto;padding:2%;">
<div class="row padding lineHeight">
<center>    
<div class="col">
<?php
include "../functions/conn.php";
$dayDate=date("Y/m/d");  
$que = "SELECT COUNT(trId) AS visitors FROM traffic WHERE dayDate='$dayDate'";
        $result = $conn->query($que);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $visitors = $row['visitors'];
                echo "
                <h1>Today</h1>
                <div class='boxP bg-primary text-white'>
                <h1>$visitors</h1>
                <p>visitors</p>                
                </div>
                ";
        }
    } 
    $conn->close();    
?>    
</div>
<br />
<div class="col">
<?php
include "../functions/conn.php";
$yes=date("Y/m/d", strtotime("yesterday")); 
$que = "SELECT COUNT(trId) AS visitors1 FROM traffic WHERE dayDate='$yes'";
$result = $conn->query($que);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $visitors1 = $row['visitors1'];
                echo "
                <h1>Yesterday</h1>
                <div class='boxP bg-success text-white'>
                <h1>$visitors1</h1>
                <p>visitors</p>
                </div>
                ";
        }
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