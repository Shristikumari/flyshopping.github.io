<?php include('naviga.php');
$con=mysqli_connect('localhost','root','','fly');
if(isset($_GET['cat_id'])){
  $cat_id=$_GET['cat_id'];
$get="SELECT * FROM category where cat_id='$cat_id'";
$run=mysqli_query($con,$get);
$row=mysqli_fetch_array($run);
$cat_id=$row['cat_id'];
$cat_title=$row['cat_title'];
?>
<html>

<head>
    <meta name="viewport" content="widht=device-width ,initial scale=1">
    <link rel="stylesheet"  type="text/css" href="allflycat.css?vm<?php echo time();?>  "/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="similer">
        <p><?php echo $cat_title;?></p>
        <hr>
    </div>
    <div id="next">
    <div class="container-fluid" id="hov" >
 <div class="row" id="rob">
 <?php 
     $get="SELECT * FROM products where cat_id='$cat_id'";
     $run=mysqli_query($con,$get);
     while($row=mysqli_fetch_array($run)){
      $prd_id=$row['prd_id'];
      $prd_title=$row['prd_title'];
      $prd_price=$row['prd_price'];
      $prd_img1=$row['prd_img1'];

     ?>

 <div class="col-sm-2">
 <div class="card" style="width:225px;height:300px;">
 <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1?>"></a>
     <div class="card-body">
  <h2 id="f"><?php echo $prd_title; ?></h2>
  <h2 id="f"><?php echo $prd_price;?></h2>
</div><!---card body end-->

      </div>
       </div>
       <?php } }?>

 </div>

          </div>

</div>


 <?php include('footer.php'); ?>
 </body>
</html>