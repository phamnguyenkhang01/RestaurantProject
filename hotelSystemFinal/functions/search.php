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
</head>
<body onload='showMenu()'>
<?php
include "header.php";
include "menu.php";            
?>
<div class='container-fluid bg' style='margin-top:80px;height:auto;'>
<center>
<br />
<div class='row' style='width:40%;height:auto;padding:2%;border:2px solid white;border-radius:5px;'>
<div class='row padding lineHeight'>
<h1 class='fontFamily color uppercase fontSize'>Tables Information</h1>
</div>
<?php
include "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$date = $_POST['date'];
$dateReplace = str_replace('-"', '/', $date);
$newDate = date("Y-m-d", strtotime($dateReplace));        
    $que = "SELECT COUNT(gId) AS torder FROM orders WHERE gDate='$newDate'";
        $result = $conn->query($que);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $tabUsed=$row['torder'];
        $tabremaining=(int)(100-$tabUsed);    
        echo "
        <h2>Date : $date</h2>        
        <h2>Tables Reseved : $tabUsed</h2>
        <h2>Tables Available : $tabremaining</h2>
        ";
        }
    }
}
    $conn->close();
?>
</div>
<br />
<a href="../index.php" style='text-decoration:none;color:#fff;'><button class='btn btn-success'>Close</button></a>
<br />
<div class="row" style="width:100%;padding:2%;height:100px;background:#fff;margin-top:10px;">
<p style="text-align:center;">Copyright &copy; <?php echo date('Y');?> Alex Hotel</p>    
</div>      
</center>
</div>
</body>
</html>
