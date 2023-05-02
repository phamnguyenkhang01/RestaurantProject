<!DOCTYPE html>
<html>
<head>
    <title>Alex Hotel Login</title>
    <link rel="icon" href="../logo/icon.svg" />    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="../js/functions.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>
    <style>
    body{
        background-image: url(../photos/goal.jpg);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }        
</style>    
<body onload="showMenu();showSearch()">
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
                    <li>the best resturant in the world</li>
                </ul>    
            </div>
    </div>        
</header>
<div class="row" style="width: 100%;margin-top:80px;">
<div class="col">
<br /><br />
<center>    
<div class="container">
  <form action="validate.php" method="post" autocomplete="off">
    <div class="mb-3 mt-3">
    <h2>Login <i class="fa fa-sign-in" aria-hidden="true"></i></h2><br />
    </div>
    <div class="mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter number" name="number" required>
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password" required>
    </div>
      <input type="submit" value="Login" class="lgbtn" />
</form>    
</div>      
</center>
</div>
<div class="col"></div>
</div>
</body>
</html>
