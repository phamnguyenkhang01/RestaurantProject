<?php
include "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name=$_POST['name'];
    if(!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{4}$/", $_POST['number'])) {
        echo "<script>alert('Number must be 11 digits');</script>";
        exit();
    }
    else{
    $number=$_POST['number'];        
    }
    $email=$_POST['email']; 
    $numbers = preg_match('@[0-9]@', $_POST['password']);
    $uppercase = preg_match('@[A-Z]@', $_POST['password']);
    $lowercase = preg_match('@[a-z]@', $_POST['password']);
    $specialChars = preg_match('@[^\w]@', $_POST['password']);
    
    if(strlen($_POST['password']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "<script>alert('Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.');</script>";
        exit();
    } 
    else {
        $password=$_POST['password'];
    }    
    
    $sql = "INSERT INTO users(uName,uEmail,uNumber,uPassword) VALUES('$name','$email','$number','$password')";    
        if ($conn->query($sql) ==TRUE){
            header("location:../login.php");    
        } 
        else {
            echo "Error: " . $sql . "<br />" . $conn->error. " <br />";
        }
        $conn->close(); 

}
else{
        echo "User not created";
}
?>
