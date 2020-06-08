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
<?php
      $prd_get_cat="SELECT * FROM product_subcat";
      $run_prd=mysqli_query($con,$prd_get_cat);
      while($row=mysqli_fetch_array($run_prd))
      {
        $subcat_id=$row['subcat_id'];
        $subcat_title=$row['subcat_title'];


          echo "<a href='flycat.php?subcat_id=$subcat_id' value='$subcat_id'>$subcat_title</a>";
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
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" 
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



<!----slider-->
<div id="mycaro">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:100px;">
        <ul class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ul>
        <div class="carousel-inner" role="listbox" style="height:300px;">
          <?php 
          $getslider="SELECT * FROM slider LIMIT 0,1";
          $run=mysqli_query($con,$getslider);
             while($row=mysqli_fetch_array($run)) 
             {
               $slider_name=$row['slider_name'];
               $slider_image=$row['slider_image'];
               echo "<div class='item active' style='height:400px;'>
               <img src='Admin panel/dashboard/dist/flyimage/$slider_image'>
               </div>
               ";
             }         
          ?>
                   <?php
                   $getslider="SELECT * FROM slider LIMIT 1,1";
                       $run=mysqli_query($con,$getslider);
                       while($row=mysqli_fetch_array($run)){
                       $slider_name=$row['slider_name'];
                       $slider_image=$row['slider_image'];
                       echo "<div class='item' style='height:400px;'>
                       <img src='Admin panel/dashboard/dist/flyimage/$slider_image'>
                       </div> ";
                       }
                   ?>


                    </div> 
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
        </a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
    </a> 

</div><!---slider part end--> 
                      </div>
             <!---card part start-->
         <div class="container-fluid" id="card">
            <div class="row">
              <?php
              $get="SELECT * FROM offer_cat LIMIT 1";
              $run=mysqli_query($con,$get);
              $row=mysqli_fetch_array($run);
              $offer_cat_id=$row['offer_cat_id'];
              $offer_cat_title=$row['offer_cat_title'];
              $offer_cat_img=$row['offer_cat_img'];
              $offer_cat_desc=$row['offer_cat_desc'];
?>
                <div class="col-sm-3">
        <div class="card" style="width:280px;">
        <h2 class="card-title"><?php echo $offer_cat_desc?></h2>
    <img class="card-img-bottom" src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$offer_cat_img ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <a href="offerflycat.php?offer_cat_id=<?php echo $offer_cat_id?>">See more</a>
    </div>
   </div>
            </div><!--col-1 end-->
            <?php
            $get="SELECT * FROM offer_product_cat LIMIT 0,2";
              $run=mysqli_query($con,$get);
              while($row=mysqli_fetch_array($run)){
              $offer_prd_cat_id=$row['offer_prd_cat_id'];
              $offer_pcat_title=$row['offer_prd_cat_title'];
              $offer_pcat_img=$row['offer_prd_cat_img'];
              $offer_pcat_desc=$row['offer_prd_cat_desc'];
              ?>

            <div class="col-sm-3">

            <div class="card" style="width:280px;">
        <h2 class="card-title"><?php echo $offer_pcat_desc?></h2>
    <img class="card-img-bottom" src="<?php echo 'Admin panel/dashboard/dist/flyimage/'
    .$offer_pcat_img ?>" alt="Card image" style="width:100%">
    <div class="card-body">
    <a href="offerprdflycat.php?offer_prd_cat_id=<?php echo $offer_prd_cat_id?>">See more</a>
    </div>
   </div>
      </div><!--col-2 end-->
              <?php } ?>
            <div class="col-sm-3">
            <div class="container-fluid">
              <h2>Laptop|DSLR </h2>
  <div class="row">
  <img src="flypic/lap.jpg" alt=" image" style="width:100%;height:180px;">

    </div>
  <br>
  <div class="row">
  <img src="flypic/dsl.jpg" alt=" image" style="width:100%;height:250px;">

  </div>
                      </div>
                      </div>

          </div><!--row end-->   
            </div>
<!---card part end-->
   <!--next slider end-->
   <div class="container-fluid" id="prod">
   <h2 style="margin-top:20px;">Today's Deals&nbsp<a href="#" style="font-size:12px;">See all deals</a><h2>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item py-5 active">
                    <div class="row">
                    <?php
   $get_product="SELECT * FROM products order by 'price' desc LIMIT 6";
   $run=mysqli_query($con,$get_product);
   while($row=mysqli_fetch_array($run))
   {
           $prd_id=$row['prd_id'];
           $prd_img1=$row['prd_img1'];

?>
 
          <div class="col-sm-2">
         <img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1 ?>"/>
                <div class="text"><a href="#"><i class="fa fa-heart"></i></a></div>
              </div>
               <?php } ?>

              </div>
             </div>
                    <div class="carousel-item py-5">
                    <div class="row">
                    <?php
   $get_product="SELECT * FROM products order by 'price' desc LIMIT 6";
   $run=mysqli_query($con,$get_product);
   while($row=mysqli_fetch_array($run))
   {
           $prd_id=$row['prd_id'];
           $prd_img1=$row['prd_img1'];

?>

                        <div class="col-sm-2">
            <img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1 ?>" style="width:100%;height:250px;">
                        <div class="text"><a href="#"><i class="fa fa-heart"></i></a></div>
                      </div>
                        <?php }  ?>

                    </div>
                    </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" >
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
         </a>
     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
            </a>
    </div>
                  </div>
   </div>
   <!--next slider end --->
   <!---quick view part start-->
   <div class="container-fluid" id="quick">
   <h2 style="margin-top:20px;">Latest Fashion
   <a href="viewmore.php?cat_id=<?php $cat_id?>" style="font-size:12px;">See all deals</a><h2>
     <div class="row">
     <?php
   $get_product="SELECT * FROM products  LIMIT 6";
   $run=mysqli_query($con,$get_product);
   while($row=mysqli_fetch_array($run))
   {
           $prd_id=$row['prd_id'];
           $prd_title=$row['prd_title'];
           $prd_img1=$row['prd_img1'];
?>

       <div class="col-sm-2">
       <div class="container">
  <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1 ?>" id="ck" style="height:200px;width: 200px;"></a>
  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal">
  <a href="#">Quick View</a>
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
            <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1 ?>" id="ck" style="height:200px;width: 200px;"></a>
            </div>
            <div class="col-sm-6">
              <h1><?php echo $prd_title?></h1>
              <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><button type="button" class="btn btn-secondary" >
                see product detail</button></a>

            </div>
          </div>
        </div><!----modal body end-->
                  </div>
                  </div><!----col-2-->
         
    </div>
  </div>
  </div>
  <?php } ?>

       </div><!--row-->
                </div>
                
   <!-----quick view end--->
   <div class="container-fluid" id="hed">
   <h2 style="margin-top:20px;">Headphone|Earphone<a href="#" style="font-size:12px;">See all deals</a><h2>
     <div class="row">
       <?php
     $get_product="SELECT * FROM products where cat_id=3 LIMIT 6";
   $run=mysqli_query($con,$get_product);
   while($row=mysqli_fetch_array($run))
   {
           $prd_id=$row['prd_id'];
           $prd_title=$row['prd_title'];
           $prd_img1=$row['prd_img1'];
           $prd_price=$row['prd_price'];
           $prd_sale_price=$row['prd_sale_price'];

?>

       <div class="col-sm-2">
       <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1 ?>" id="ck" style="height:200px;width: 200px;"></a>
       <p id="a">₹<?php echo $prd_price?></p>
       <p id="a" style="font-size:12px;">₹<?php echo $prd_sale_price?></p>
      </div>
   <?php }?>
     </div>
                 </div>
                  <br><!---headphone end--->
    <div class="container-fluid" id="phone">
    <h2 style="margin-top:20px;">product<a href="#" style="font-size:12px;">See all deals</a><h2>
     <div class="row">
     <?php
     $get_product="SELECT * FROM products LIMIT 9,6";
   $run=mysqli_query($con,$get_product);
   while($row=mysqli_fetch_array($run))
   {
           $prd_id=$row['prd_id'];
           $prd_title=$row['prd_title'];
           $prd_img1=$row['prd_img1'];
           $prd_price=$row['prd_price'];

?>


       <div class="col-sm-2">
       <a href="productdetail.php?prd_id=<?php echo $prd_id?>"><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1 ?>" id="ck" style="height:200px;width: 200px;"></a>
       <p id="a">₹<?php echo $prd_price?></p>
              </div>
   <?php }?>
     </div>
              </div>
   

<!---=====================footer=====================================---->
   </div><!---allpage end--->
   <?php include('footer.php');?>
</body>
</html>
