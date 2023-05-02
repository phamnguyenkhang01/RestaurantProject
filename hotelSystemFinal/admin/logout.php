<?php
session_start();
unset($_SESSION['number']);
unset($_SESSION['password']);
session_destroy();
header("location:login.php");
exit();
?>