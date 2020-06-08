<?php include('conection.php'); 
 include('function.php');
 error_reporting(0);
 session_start();
 ?>
 
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="widht=device-width ,initial scale=1">
<link rel="stylesheet"  type="text/css" href="flyt.css?vm<?php echo time();?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.navbar.style.backgroundColor = "rgba(0,0,0,0.7)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "whitesmoke ";

}


        </script>
        <div class="allpage">
   <nav class="navbar navbar-expand-sm  bg-custom navbar-dark fixed-top" style="height:50px;width:100%;">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <div class="navbar-header" style="margin-bottom:9px;left:15px;position:relative;">
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="fly.php" style="">Home</a>
  <hr>
  <a href="#">
  <?php
      $get_cat="SELECT * FROM category";
      $run=mysqli_query($con,$get_cat);
      while($row=mysqli_fetch_array($run))
      {
        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];

       echo "<a href='flycat1.php?cat_id=$cat_id' value='$cat_id'>$cat_title</a>";
      }
      ?>
<?php
      $prd_get_cat="SELECT * FROM product_catagory";
      $run_prd=mysqli_query($con,$prd_get_cat);
      while($row=mysqli_fetch_array($run_prd))
      {
        $prd_cat_id=$row['prd_cat_id'];
        $prd_cat_title=$row['prd_cat_title'];


          echo "<a href='flycat.php?prd_cat_id=$prd_cat_id' value='$prd_cat_id'>$prd_cat_title</a>";
      }
      ?>

  </a>

                    <a href="login.php">Yours Account</a>
                      <a href="#">Customer service</a>
                      <a href="#">Sign out</a>
</div>
<div id="main">
  <span class="openbtn" onclick="openNav()">☰</span>
</div>
</div><!----mynav end---->
<a class="navbar-brand" href="fly.php" id="Logo">
    <img src="flypic/logo.jpg">
  </a>
  <ul class="navbar-nav">
    <li class="nav-item">
    <form>
    <div class="input-group mb-3 input-group-lg" style="width:600px;margin-top:20px;">
    <input type="text" class="form-control" placeholder="search....">
      <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-search" ></i></span>
      </div>
    </div>
  </form>
    </li>
    <li class="nav-item dropdown" id="account">
      <a class="nav-link dropdown-toggle" href="login.php" id="navbardrop" 
      data-toggle="dropdown" >Hello.<?php echo ($_SESSION['uname']);?><br>Account & List</a>
      <div class="dropdown-menu">
      <button id="sign"><a href="login.php">sign in</a></button>     
<a class="dropdown-item" href="myaccount.php"><i class="fa fa-user-circle">&nbspMy Account</i></a>
<a class="dropdown-item" href="productCart.php"><i class="fa fa-shopping-cart">&nbspCart</i></a>
<a class="dropdown-item" href="#"><i class="fa fa-gratipay">&nbspWishList</i></a>
<a class="dropdown-item" href="logout.php">&nbsp&nbsp&nbspSign up</a>

      </div>
    </li>
    <li class="nav-item" id="ord">
      <a class="nav-link" href="myorder.php" >Return<br>&Orders</a>
    </li>


    <li class="nav-item" id="cart">
      <a class="nav-link" href="productCart.php" >
      <i class="fa fa-cart-plus"><sup><span class="badge badge-light"><?php item();?></span></sup></i>
      </a>
    </li>
  </ul>
</div><!---colaspe--->

</nav>
