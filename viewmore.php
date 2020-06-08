
<?php $con=mysqli_connect('localhost','root','','fly');
?> 
    <?php include('naviga.php');?>
    <?php
   if(isset($_GET['cat_id'])){
   $prd_id=$_GET['prd_id'];
      
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
      <h1></h1>
      <hr>
        </div>
<div id="next">
   <div class="row">

   <div class="col-sm-12">
     <div class="container-fluid" id="hov">
       <div class="row" style="margin-top:100px;">
         <?php 
         $get="SELECT * FROM products where cat_id='cat_id'";
         $run=mysqli_query($con,$get);
         while($row=mysqli_fetch_array($run)){
          $prd_id=$row['prd_id'];
          $prd_title=$row['prd_title'];
          $prd_price=$row['prd_price'];
          $prd_img1=$row['prd_img1'];

         ?>
         <!--row 1 start--->
   <div class="col-sm-3">
   <div class="card" style="width:255px;height:300px;">
   <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><img src="<?php echo 'Adpanel/nalika/flyimage/'.$prd_img1?>"></a>
       <div class="card-body">
      <h2 id="f"><?php echo $prd_title; ?></h2>
      <h2 id="f"><?php echo $prd_price;?></h2>
    </div><!---card body end-->
   </div><!---card end-->
    </div><!---col-3 end-->
    <?php } } ?>
      </div>
   </div><!---hov end-->

   </div><!---col-9 end-->
    </div><!---row end-->

</div><!---container end--->






<!--========================================================---------------->
<?php include('footer.php'); ?>
</body>
</html>
<div class="col-sm-3">
   <div class="card" style="width:280px;height:400px;margin-top:62px;margin-left:10px;">
        <h2 class="card-title"><p style="margin-left:25px;">Women|subcatagory</p></h2>
    <div class="card-body" >
    <?php
    if(isset($_GET['subcat_id'])){
      $subcat_id=$_GET['subcat_id'];
   $prd_get_cat="SELECT * FROM product_subcat where subcat_id='$subcat_id'";
   $run_prd=mysqli_query($con,$prd_get_cat);
   while($row=mysqli_fetch_array($run_prd))
   {
     $prd_cat_id=$row['subcat_id'];
     $prd_cat_title=$row['subcat_title'];
   ?>

    <div class="h" style="margin-left:25px;">

    <h3><a href=''><?php echo $prd_cat_title?></a></h3> 
        </div>
   <?php } }?>
    </div>
   </div>
   </div><!---col-3 end-->
   <div id="next">
   <div class="col-sm-9">
     <div class="container-fluid" id="hov">
       <div class="row" style="margin-top:100px;">
         <?php 
         $get="SELECT * FROM products where prd_cat_id='$prd_cat_id'";
         $run=mysqli_query($con,$get);
         while($row=mysqli_fetch_array($run)){
          $prd_id=$row['prd_id'];
          $prd_title=$row['prd_title'];
          $prd_price=$row['prd_price'];
          $prd_img1=$row['prd_img1'];

         ?>
         <!--row 1 start--->
   <div class="col-sm-3">
   <div class="card" style="width:255px;height:300px;">
   <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1?>"></a>
       <div class="card-body">
      <h2 id="f"><?php echo $prd_title; ?></h2>
      <h2 id="f"><?php echo $prd_price;?></h2>
    </div><!---card body end-->
   </div><!---card end-->
    </div><!---col-3 end-->
    <?php } }?>
      </div>
   </div><!---hov end-->

   </div><!---col-9 end-->

</div><!---container end--->
