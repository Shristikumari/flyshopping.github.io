<?php 
include('naviga.php'); 
session_start();
?>

    
<html>
<head>
<link rel="stylesheet"  type="text/css" href="productcart.css?vm<?php time();?>">
</head>
<html>
<head>
<body>
    <style>
        body{
            background-color:whitesmoke;

        }
        </style>
        <?php 
     $session_uname=$_SESSION['uname'];
     $select_customer="SELECT * FROM register where uname='$session_uname'";
     $run=mysqli_query($con,$select_customer);
     $row=mysqli_fetch_array($run);
        $u_id=$row['u_id'];
    ?>
<div class="col-md-9" id="cart" style="height:400px;position:relative;top:180px;">
<div class="box" text >
       <h1 class="text-center">Payment option</h1>
       <p class="lead text-center" >
<a href="order.php?u_id=<?php echo $u_id ?>" style="color:black;">Cash on dilevry</a>
       </p>
       <p class="lead text-center">
       <a href="#" style="color:black;">Pay with paypal
             <img src="flypic/paypal.png" width="500" height="270" class="img-responsive" style="margin-left:250px;">
             <a>
           </p>


    </div>
    </div>
      </div>
  </div>
</div>

</body>
</html>
