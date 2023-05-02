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
                    <li data-bs-toggle="modal" data-bs-target="#myModal" style="cursor:pointer;">Reservation</li>
                    <li style="cursor:pointer;"><i class="fa fa-search showsearch" aria-hidden="true" style="font-weight: bold;"></i></li>        
                </ul>    
            </div>
        
            <div class="col">
                <button class="menubtn">Menu <i class="fa fa-angle-down" aria-hidden="true" style="font-weight: bold;"></i></button>
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
