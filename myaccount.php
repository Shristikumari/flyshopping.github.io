<?php include('naviga.php'); 
if(!isset($_SESSION['uname'])){
    echo"<script>window.open('login.php','_self')</script>";
}else {

?>
<?php $session_register=$_SESSION['uname'];
   $get="SELECT * FROM login where uname='$session_register'";
   $run=mysqli_query($con,$get);
   $row=mysqli_fetch_array($run);
   $uname=$row['uname'];

?>

<html>
<head>
 <meta name="viewport" content="widht=device-width ,initial scale=1">
 <link rel="stylesheet"  type="text/css" href="myaccount.css?vm<?php echo time();?>">
</head>
<body>
    <style>
        body{
        }
        </style>

<div class="row" class="responsive" style="position:relative;top:150px;">
    <div class="col-md-3"><!--col-md-3 start-->

        <div class="row">
    <div class="box" id="account">
      <div class="col-sm-9" style="position:relative;top:10px;">
          <p>hello summi<br><?php echo $uname;?></p>
      </div>

    </div><!--boxend-->
    </div><!--row end-->

    <div class="row">
      <div class="box" id="my">
      <div class="box-header">
          <h3><a href="myorder.php">MY ORDERS</a></h3>
          <hr>
      </div>
              <div class="setting">ACCOUNT SETTING</div>

                    <div class="A">
                   <p><a href="information.php" class="in">Profile information</a></p>
                   <p><a href="http://localhost/php/manageadd.php">Manage address</a></p>
                   <p><a href="#">PAN Card information</a></p>
                    </div>
         <hr>
           <div class="setting">ACCOUNT SETTING</div>
         <div class="A">
        <p><a href="#">phonePay wallet</a></p>
         <p><a href="#">Gift Card</a></p>
         <p><a href="">saved Card</a></p>
         </div>
         <hr>
         <div class="setting">
             <a href="#">LOGOUT</a>
         </div>

    </div>
</div>
    </div><!--col-md-3 end-->

</body>
    </html>
    <?php } ?>
