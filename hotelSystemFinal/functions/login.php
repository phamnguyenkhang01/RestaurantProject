<?php
session_start();
include "conn.php";
if($_SERVER["REQUEST_METHOD"]== "POST"){   

    if(!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{4}$/", $_POST['number'])) {
        echo "<script>alert('Number must be 11 digits');</script>";
        exit();
    }
    else{
        $num1 = $_POST['number'];
    }
$pass1 =$_POST['password'];
    
    $que = "SELECT * FROM users WHERE uNumber = '$num1' AND uPassword = '$pass1'";
        $result = $conn->query($que);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $num = $row['uNumber'];
                $pass = $row['uPassword'];
                if($num==$num1 && $pass==$pass1) {
                        $_SESSION['number'] = $num1;
                        $_SESSION['password'] = $pass1;   
                        header("location:../profile.php");                                               
                }
        }
    } 
    else{
        echo "<script>alert('Wrong user number or password');</script>";
    }  
    
    $conn->close();
}
?>