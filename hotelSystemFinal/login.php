<!DOCTYPE html>
<html>
<head>
    <title>Alex Hotel Login</title>
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
    <style>
    body{
        background-image: url(photos/kitchen.jpg);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }        
</style>    
<body onload="showMenu();showSearch()">
<?php require "header.php";?>    
<?php require "menu.php";?>    
<div class="row" style="width: 100%;">
<div class="col">
</div>
<div class="col">
<br /><br />
<center>    
<div class="container padd rounded boxSh formC">
  <form action="functions/login.php" method="post" autocomplete="off">
    <div class="mb-3 mt-3">
    <h2>Login <i class="fa fa-sign-in" aria-hidden="true"></i></h2><br />
    </div>
    <div class="mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter number" name="number" required>
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label normalfont">
        No Account? <a href="signup.php">Register</a>
      </label>
    </div>
      <input type="submit" value="Login" class="lgbtn" />
</form>    
<hr class="hr" />    
<ul class="ulMenu">
    <li><a href="index.php#about">About</a></li>
    <li>|</li>
    <li><a href="index.php#contactUs">Contact us</a></li>
</ul>
<hr class="hr" />    
<div class="row" style="width: 100%;">
<div class="col">
<a href="signup.php" style="text-decoration: none;color: #fff;"><button class="btn btn-success boxSh">Sign Up</button></a>    
</div>    
<div class="col">
    <a href="reserve.php" style="text-decoration: none;color: #fff;"><button class="boxSh btn btn-success">Guest</button></a>      
</div>    
</div>    
</div>      
</center>
</div>
</div>
</body>
</html>
