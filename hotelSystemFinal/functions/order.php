<?php
session_start();
if (isset($_SESSION['id'])){
    $uid=$_SESSION['id'];
}
else{
$guid=$_SESSION['guest'];
}
include "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['username'];
    $email=$_POST['useremail'];
    $number=$_POST['usernumber'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $totalguest=$_POST['guests'];
    $type=$_POST['useroption'];
    $dinnerNum= random_int(100000, 999999);
    $tabNum= random_int(10, 99);
    if($type=="user"){
    $sql = "INSERT INTO orders(gName,gEmail,gNumber,gDate,gTime,totalGuests,type,dinnerNum,tableNum,uid,guest_id) 
            VALUES('$name','$email','$number','$date','$time','$totalguest','$type','$dinnerNum','$tabNum','$uid','0')";                
            if ($conn->query($sql) ==TRUE){
            $que = "SELECT * FROM orders WHERE uid='$uid'";                
            $result = $conn->query($que);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $id1=$row['gId'];                    
            $name1=$row['gName'];
            $email1=$row['gEmail'];
            $number1=$row['gNumber'];
            $date1=$row['gDate'];
            $time1=$row['gTime'];
            $totalguest1=$row['totalGuests'];
            $tableNum1=$row['tableNum'];    
            $dinnerNum1=$row['dinnerNum'];    
            if($dinnerNum==$dinnerNum1) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
            <title>Alex Hotel Reservation</title>
            <link rel='icon' href='../logo/icon.svg' />    
            <meta charset='utf-8' />
            <meta name='viewport' content='width=device-width, initial-scale=1' /> 
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js'></script>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>    
            <script src='../js/functions.js'></script>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' /> 
            <link rel='stylesheet' type='text/css' href='../css/styles.css' />
            <style>
            p{
            font-family:sans-serif;
            font-size:1.2em;
            color:white;
            }
            </style>
            </head>
            <body onload='showMenu()'>
            ";
            include "header.php";
            include "menu.php";        
            echo "
            <div class='container-fluid bg' style='margin-top:80px;height:auto;'>
            <center>
            <br />
            <div class='row' style='width:40%;height:auto;padding:2%;border:2px solid white;border-radius:5px;'>
            <div class='row padding lineHeight'>
            <h1 class='fontFamily color uppercase fontSize'>$name1 Your Order Information</h1>
            </div>
            <div class='col'>
            <p>ID</p>
            <p>Name</p>
            <p>Email</p>
            <p>Number</p>
            <p>Date</p>
            <p>Time</p>
            <p>Total Guests</p>
            <p>Dinner number</p>
            <p>Table Number</p>            
            </div>
            <div class='col'>
            <p>$id1</p>
            <p>$name1</p>
            <p>$email1</p>
            <p>$number1</p>
            <p>$date1</p>
            <p>$time1</p>
            <p>$totalguest1</p>
            <p>$dinnerNum1</p>
            <p>$tableNum1</p>
            </div>            
            </div>
            <br />
            <a href='../profile.php' style='text-decoration:none;color:#fff;'><button class='btn btn-success'>Done</button></a>
            <br />
            </center>
            <br />
            </div>
            <div class='row' style='width:100%;padding:2%;height:100px;background:#fff;margin-top:10px;'>
            <p style='text-align:center;color:#000;'>Copyright &copy; ";                
            echo date('Y');
            echo "   
             Alex Hotel
            </p>    
            </div>      
            </body>
            </html>
            ";    
        }
        }
        } 
        } 
        else {
        echo "Error: " . $sql . "<br />" . $conn->error. " <br />";
        }
    }
    else{
    $sql = "INSERT INTO orders(gName,gEmail,gNumber,gDate,gTime,totalGuests,type,dinnerNum,tableNum,uid,guest_id) 
            VALUES('$name','$email','$number','$date','$time','$totalguest','$type','$dinnerNum','$tabNum','0','$guid')";                        
        if ($conn->query($sql)==TRUE){
            $que = "SELECT * FROM orders WHERE guest_id='$guid'";                
            $result = $conn->query($que);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $gid1=$row['guest_id'];                    
            $name1=$row['gName'];
            $email1=$row['gEmail'];
            $number1=$row['gNumber'];
            $date1=$row['gDate'];
            $time1=$row['gTime'];
            $totalguest1=$row['totalGuests'];
            $tableNum1=$row['tableNum'];    
            $dinnerNum1=$row['dinnerNum'];    
            if($dinnerNum==$dinnerNum1) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
            <title>Alex Hotel Reservation</title>
            <link rel='icon' href='../logo/icon.svg' />    
            <meta charset='utf-8' />
            <meta name='viewport' content='width=device-width, initial-scale=1' /> 
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js'></script>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>    
            <script src='../js/functions.js'></script>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' /> 
            <link rel='stylesheet' type='text/css' href='../css/styles.css' />
            <style>
            p{
            font-family:sans-serif;
            font-size:1.2em;
            color:white;
            }
            </style>
            </head>
            <body onload='showMenu()'>
            ";
            include "header.php";
            include "menu.php";        
            echo "
            <div class='container-fluid bg' style='margin-top:80px;height:auto;'>
            <center>
            <br />
            <div class='row' style='width:40%;height:auto;padding:2%;border:2px solid white;border-radius:5px;'>
            <div class='row padding lineHeight'>
            <h1 class='fontFamily color uppercase fontSize'>$name1 Your Order Information</h1>
            </div>
            <div class='col'>
            <p>ID</p>
            <p>Name</p>
            <p>Email</p>
            <p>Number</p>
            <p>Date</p>
            <p>Time</p>
            <p>Total Guests</p>
            <p>Dinner number</p>
            <p>Table Number</p>            
            </div>
            <div class='col'>
            <p>$gid1</p>
            <p>$name1</p>
            <p>$email1</p>
            <p>$number1</p>
            <p>$date1</p>
            <p>$time1</p>
            <p>$totalguest1</p>
            <p>$dinnerNum1</p>
            <p>$tableNum1</p>
            </div>            
            </div>
            <br />
            <a href='../index.php' style='text-decoration:none;color:#fff;'><button class='btn btn-success'>Done</button></a>
            <br />
            </center>
            <br />            
            </div>
            <div class='row' style='width:100%;padding:2%;height:100px;background:#fff;margin-top:10px;'>
            <p style='text-align:center;color:#000;'>Copyright &copy; ";                
            echo date('Y');
            echo "   
             Alex Hotel
            </p>    
            </div>                  
            </body>
            </html>
            ";    
        }
        }
        } 
        } 
        else {
        echo "Error: " . $sql . "<br />" . $conn->error. " <br />";
        }    
    }
    $conn->close(); 
}
else{
        echo "Table not reserved";
}
?>