<?php include('naviga.php')?>
<?php 
if(isset($_GET['prd_id']))		{
	$prd_id=$_GET['prd_id'];
	$get_product="SELECT * FROM products where prd_id='$prd_id'";
	$run=mysqli_query($con,$get_product);
	$row=mysqli_fetch_array($run);
	$prd_cat_id=$row['prd_cat_id'];
	$prd_title=$row['prd_title'];
	$prd_price=$row['prd_price'];
	$prd_size=$row['prd_size'];
	$prd_desc=$row['prd_desc'];
	$prd_img1=$row['prd_img1'];
	$prd_img2=$row['prd_img2'];
	$prd_img3=$row['prd_img3'];
$get_cat="SELECT * FROM product_catagory where prd_cat_id='$prd_cat_id'";
$run=mysqli_query($con,$get_cat);
$row=mysqli_fetch_array($run);
$prd_cat_id=$row['prd_cat_id'];
$prd_cat_title=$row['prd_cat_title'];

}

?>

<html>
<meta name="viewport" content="widht=device-width ,initial scale=1">
        <link rel="stylesheet"  type="text/css" href="productdetail.css?vm<?php echo time();?>  "/>
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
	<style>
    background-color: rgb(163, 162, 162);
</style>

<body>
<!---col-md-5 end-->
<div id="al">
<div class="row" id="product">
<?php
	addCart();
	?>

<form action="productdetail.php?prd_id=<?php echo $prd_id ?>" method="POST" enctype="multiple-form-data">
		 <div class="form-group">
		 <div class="col-md-6">
		 <div id="single-tab1">
		 <img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1?>">
	    	</div><!--single-tab1 end-->
			<div class="col-xs-4">
	<a href="thumb" id="thum">
	<img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img2?>" style="margin-left:30px;">
	</a>
</div>
<div class="col-xs-4" >
	<a href="thumb" id="thum">
	<img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img3?>">
	</a>
</div>

	</div><!---col-md-5 end-->
	<div id="detail">
	<div class="col-md-6">
<div class="single-product-details res-pro-tb">
<p style="font-size:20px;right:20px;position:relative;"><b><?php echo $prd_title;?></b></p> 
</div>
       <div class="single-pro-price" >
        <span class="single-regular" ><b>price:</b> <b style="color:green;">₹<?php echo $prd_price?></b></span>
		</div>
		<div class="dilevary"><h3>In Stock</h3>
			<p>Delivery by <b>Mar 22-26</b><a href="#">&nbspDetails</a></p>
			<h5><a href="#"><i></i>Select delivery location</a></h5>
		</div>


		     <div class="prd-detail">

			  <span class="quantity">
			  <h4 style="color:black;">Quantity</h4>
			  <select name="prd_qty">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>

                   </select>

			  </span>

<!---quantity end-->
<div class="single-pro-size">
			  <h4 style="color:black;">Size</h4>
			  <select name="prd_size">
				  <option>1</option>
				  <option>1</option>
				  <option>1</option>

				   </select>
	</div>
<!-----size end--->

</div><br><!--prd_detail end-->
  <p class="text-button">
	  <button type="submit">
	  <a href="productdetail.php?add_cart=<?php echo $prd_id?>"  id="add_cart">
	  <i class="fa fa-shopping-cart"></i>Add to cart</a>
	  </button>
	  <button  type="submit">
	  <a href="productCart.php?prd_id=<?php echo $prd_id?>">
	  <i class="fa fa-shopping"></i>Buy Now</a>
	  </button><br><br>

   </p>
   <div class="single-pro-cn" style="color:black;">
<h3 style="color:black;">product detail</h3>		
<p style="color:black;"><?php echo $prd_desc?></p>
</div>
</div><!----col-lg-5 end-->
</div><!--detail end-->
    </div><!--form group end--->
    </form>
    </div><!---row end-->
    </div><!---al end-->

<!----might be interested-->
<div class="container-fluid" id="might">
   <h2 style="margin-top:20px;"><h3>You might be interested in</h3><a href="#" style="font-size:12px;">See all deals</a><h2>
   <div class="row" id="same">
	   <?php 
   $get_product="SELECT * FROM products where prd_cat_id='$prd_cat_id' LIMIT 3";
   $run=mysqli_query($con,$get_product);
   while($row=mysqli_fetch_array($run))
   {
           $prd_id=$row['prd_id'];
           $prd_title=$row['prd_title'];
           $prd_img1=$row['prd_img1'];
           $prd_price=$row['price'];

?>

	<div class="col-md-4">
	<div class="row" id="first">
		<div class="col-md-6" >
		<a href="">
		<img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1 ?>"/>
		  </a>

		</div><!---col-md-6 end--->

	  <div class="col-md-6" id="second">
	  <span class="pro">
		  <h3>product name</h3>
		  <p>min 70% off</P>
		  <button class="btn btn-primary" type="submit">
		  <i class="fa"></i>Shop Now
	  </button>

	</span>
	  </div><!---col-md-6 end--->

	</div><!---row end--->

	</div><!---col-md-4 end--->
	<?php }?>
   </div><!---row end--->
</div><!---might end--->
<!------------footer---------->
<?php include('footer.php')?>
</body>
</html>