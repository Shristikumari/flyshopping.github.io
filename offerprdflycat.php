
<?php $con=mysqli_connect('localhost','root','','fly');
?> 
    <?php include('naviga.php');?>
    <?php
   if(isset($_GET['offer_prd_cat_id'])){
   $offer_prd_cat_id=$_GET['offer_prd_cat_id'];
   $prd_id=$_GET['prd_id'];
   $get_cat="SELECT * FROM offer_product_cat where offer_prd_cat_id='$offer_prd_cat_id'";
   $run_c=mysqli_query($con,$get_cat);
   while($row=mysqli_fetch_array($run_c)){
    $offer_prd_cat_id=$row['offer_prd_cat_id'];
    $offer_prd_cat_title=$row['offer_prd_cat_title'];
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
      <h1><?php echo $offer_prd_cat_title;?></h1>
      <hr>
        </div>
<div id="next">
   <div class="row">

   <div class="col-sm-3">
   <div class="card" style="width:280px;height:400px;margin-top:62px;margin-left:10px;">
        <h2 class="card-title"><p style="margin-left:25px;">Women|subcatagory</p></h2>
    <div class="card-body" >
      <div class="h" style="margin-left:25px;">
      <h3><a href="subprd_cat.php?offer_prd_cat_id=<?php offer_prd_cat_id?>">
      <?php echo $offer_prd_cat_title?></a></h3><br>
   </div>
    </div>
   </div>
   </div><!---col-3 end-->
   <div class="col-sm-9">
     <div class="container-fluid" id="hov">
       <div class="row" style="margin-top:100px;">
         <?php 
         $get="SELECT * FROM offer_product where offer_prd_cat_id='$offer_prd_cat_id'";
         $run=mysqli_query($con,$get);
         while($row=mysqli_fetch_array($run)){
          $prd_id=$row['offer_id'];
          $prd_title=$row['offer_title'];
          $prd_sale_price=$row['offer_sale_price'];
          $prd_price=$row['offer_price'];
          $prd_img1=$row['offer_img1'];

         ?>
         <!--row 1 start--->
   <div class="col-sm-3">
   <div class="card" style="width:255px;height:300px;">
   <a href="productdetail.php?offer_id=<?php echo $offer_id?>"><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1?>"></a>
       <div class="card-body">
      <h2 id="f"><?php echo $prd_title; ?></h2>
      <h2 id="f"><?php echo $prd_price;?></h2>
    </div><!---card body end-->
   </div><!---card end-->
    </div><!---col-3 end-->
    <?php } } } ?>
      </div>
   </div><!---hov end-->

   </div><!---col-9 end-->
    </div><!---row end-->

</div><!---container end--->






<!--========================================================---------------->
<?php include('footer.php'); ?>

</body>
</html>