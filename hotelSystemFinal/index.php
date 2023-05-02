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
    <style>
        body{
            background-image: url(photos/restaurant2.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }   
</style>
</head>
<body onload="showMenu();showform()">
<?php require "header.php";?>
<?php require "menu.php";?>
<?php require "popup.php";?>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>      
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photos/p1.jpg" alt="cake and biscuits" class="d-block imgSlide" style="width:100%;height:500px;">
    </div>
    <div class="carousel-item">
      <img src="photos/p3.jpg" alt="Chicago" class="d-block imgSlide" style="width:100%;height:500px;">
    </div>
    <div class="carousel-item">
      <img src="photos/p2.jpg" alt="soup" class="d-block imgSlide" style="width:100%;height:500px;">
    </div>
    <div class="carousel-item">
      <img src="photos/p4.jpg" alt="pizza" class="d-block imgSlide" style="width:100%;height:500px;">
    </div>      
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>        
<div class="container-fluid bg">
<center>
<div class="row padding lineHeight">
<h4 class="fontFamily color uppercase fontSize">Welcome to Alex Restaurant</h4>
<p class="color">A visit to Alex Restaurant is more than just a comfortable stay at the only 5-star deluxe Restuarant in Pakistan, an affiliated member of the Leading Restuarants of the World. It is a vivid immersion into the culture, heritage and lifestyles of Pakistan’s capital, a relatively undiscovered city boasting exhilarating scenery as well as some of the most colourful musical and culinary traditions in the world</p>    
</div>
</center>
</div> 
<div class="container-fluid">
        <div class="row" style="padding: 5%;padding-top:0;">
        <h1 class="service">Our Service</h1>    
        <div class="col">
            <div class="cardbox boxsh">
                <center><img src="logo/Waiters.gif" /></center>
            <div class="row">
            <p class="serviceDef">We Provide the best service to our customers, anyone can reserve table and have a delicious dinner or lunch </p>    
            </div>    
            </div>
        </div>
        <div class="col">
            <div class="cardbox boxsh">
                <center><img src="logo/together.gif" /></center>
            <div class="row">
            <p class="serviceDef">You will love our food and services, we provide 99% quality and freeshy food</p>    
            </div>    
            </div>
        </div>    
    </div>
</div>
<div class="container-fluid" style="background: #f1f1f1;">
<div class="row" style="padding: 5%;padding-top:0;">
<h1 class="service" style="color: #000;">Menu</h1>    
<div class="col">
<h1 style="text-align:center;">Breakfast</h1>
<div class="row" style="margin-top: 5%;padding: 2%;">
<center>
<div class="row">    
<div class="col">
        <img src="photos/coffee5.jpg" class="menuImg boxsh" />
        <p>Coffe 5&#36;</p>
</div>    
<div class="col">
        <img src="photos/berries1.jpg" class="menuImg boxsh" />
            <p>Berries 8&#36;</p>
</div>
</div>
<div class="row">    
<div class="col">
        <img src="photos/bread2.jpg" class="menuImg boxsh" />
        <p>Bread 6&#36;</p>
</div>    
<div class="col">
        <img src="photos/breakfast3.jpg" class="menuImg boxsh" />
            <p>Mix Breakfast 12&#36;</p>
</div>
</div>
<div class="row">    
<div class="col">
        <img src="photos/breakfast4.jpg" class="menuImg boxsh" />
        <p>Egg and Bread 15&#36;</p>
</div>    
<div class="col">
        <img src="photos/yogurt5.jpg" class="menuImg boxsh" />
            <p>Yogurt 8&#36;</p>
</div>
</div>
</center>    
</div>    
</div>
<div class="col">
<h1 style="text-align:center;">Lunch</h1>
<div class="row" style="margin-top: 5%;padding: 2%;">
<center>
<div class="row">    
<div class="col">
        <img src="photos/fried-chickenln.jpg" class="menuImg boxsh" />
        <p>Fried-chicken 15&#36;</p>
</div>    
<div class="col">
        <img src="photos/noodlesln.jpg" class="menuImg boxsh" />
            <p>Noodles 7&#36;</p>
</div>
</div>
<div class="row">    
<div class="col">
        <img src="photos/barbecueln.jpg" class="menuImg boxsh" />
        <p>Barbecue 20&#36;</p>
</div>    
<div class="col">
        <img src="photos/hamburgerln.jpg" class="menuImg boxsh" />
            <p>Hamburger 12&#36;</p>
</div>
</div>
<div class="row">    
<div class="col">
        <img src="photos/pasta.jpg" class="menuImg boxsh" />
        <p>15&#36;</p>
</div>    
<div class="col">
        <img src="photos/pizzaln.jpg" class="menuImg boxsh" />
            <p>Pizza 15&#36;</p>
</div>
</div>
</center>    
</div>    
</div>    
</div>
<div class="row" style="padding: 5%;padding-top:0;">
<div class="col">
<h1 style="text-align:center;">Dinner</h1>
<div class="row" style="margin-top: 5%;padding: 2%;">
<center>
<div class="row">    
<div class="col">
        <img src="photos/coffee5.jpg" class="menuImg boxsh" />
        <p>Coffe 5&#36;</p>
</div>    
<div class="col">
        <img src="photos/berries1.jpg" class="menuImg boxsh" />
            <p>Berries 8&#36;</p>
</div>
<div class="col">
        <img src="photos/bread2.jpg" class="menuImg boxsh" />
        <p>Bread 6&#36;</p>
</div>    
</div>
<div class="row">    
<div class="col">
        <img src="photos/breakfast3.jpg" class="menuImg boxsh" />
            <p>Mix Breakfast 12&#36;</p>
</div>
<div class="col">
        <img src="photos/breakfast4.jpg" class="menuImg boxsh" />
        <p>Egg and Bread 15&#36;</p>
</div>    
<div class="col">
        <img src="photos/yogurt5.jpg" class="menuImg boxsh" />
            <p>Yogurt 8&#36;</p>
</div>
</div>
</center>    
</div>    
</div>
</div>
</div>
<div class="container-fluid" style="background:#fff;" id="contactUs">
<div class="row" style="padding:7%;padding-top:0;">
<h1 class="service" style="color:#000;">Visitors Per Day</h1>
<div class="row">
<center>    
<h1>
<?php
include "functions/conn.php";
$dayDate=date("Y-m-d");   
$que = "SELECT COUNT(trId) AS visitors FROM traffic";
        $result = $conn->query($que);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $visitors = $row['visitors'];
                echo $visitors;
        }
    } 
    $conn->close();    
?>    
</h1>
</center>
</div>    
</div>    
</div>    
<div class="container-fluid" id="about">
<h1 class="service" style="color:#fff;">About Us</h1>    
<div class="row" style="padding:7%;padding-top:0;padding-bottom:4%;">
<p class="aboutus">Alex restaurant is the 5 star ranking restaurants in all over the world. we provide our service in 100 different countries, we believe in quality instead of quantity. Our service is open 18/7 working days where you can reserve any table from different locations without any hinderance.</p>    
</div>    
</div>      
<div class="container-fluid" style="background:#e1e1e1;" id="contactUs">
<div class="row" style="padding:7%;padding-top:0;">
<h1 class="service" style="color:#000;">Contact Us</h1>
<div class="row">
<center>    
<button class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></button>    
<button class="icons"><i class="fa fa-instagram" aria-hidden="true"></i></button>    
<button class="icons"><i class="fa fa-linkedin" aria-hidden="true"></i></button>    
<p style="margin-top:2%;">Copyright &copy; <?php echo date('Y');?> Alex Hotel</p>
</center>
</div>    
</div>    
</div>
</body>
</html>
