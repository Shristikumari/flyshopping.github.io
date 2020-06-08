<?php include('naviga.php'); ?>
<html>
<head>
 <meta name="viewport" content="widht=device-width ,initial scale=1">
 <link rel="stylesheet"  type="text/css" href="productcart.css?vm<?php echo time();?>"/>
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
        body{
            background-color: rgb(167, 162, 162);
        }
    </style>
<div class="col-md-9" id="car">
<div class="box">
         <form action="productCart.php" method="POST" enctype="multiple-form-data">
                <h1>Shopping Cart</h1>
                <?php
                $ip_add=getUserIP();
                $select_cart="SELECT * FROM cart where ip_add='$ip_add'";
                $run_cart=mysqli_query($con,$select_cart);
                $count=mysqli_num_rows($run_cart);

                ?>
                <h6>item in your cart</h6>
                <div class="table-responsive"><!----table-responsive start--->

                    <table class="table">
                        <thead>
                        <tr>
                          <th colspan="2">Product</th>
                           <th>Quantity</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th colspan="1">Delete</th>
                            <th colspan="1">Sub Total</th>

                           </tr>

                        </thead>
                        <tbody>
                            <?php 
                            $total=0;
                            while($row=mysqli_fetch_array($run_cart)){
                                $p_id=$row['p_id'];
                                $size=$row['size'];
                                $qty=$row['qty'];
                                $get="SELECT * FROM products where prd_id='$p_id'";
                                $run=mysqli_query($con,$get);
                                while($row=mysqli_fetch_array($run)){
                                     $prd_title=$row['prd_title'];
                                     $prd_price=$row['prd_price'];
                                     $prd_img1=$row['prd_img1'];
                                     $prd_size=$row['prd_size'];
                                     $sub_total=$row['prd_price'];
                                     $total +=$sub_total;
                         

                            ?>
                            <tr>
                                <td><img src="<?php echo 'Admin panel/dashboard/dist/flyimage/'.$prd_img1?>"></td>
                                0<td><?php echo $prd_title?></td>
                                <td><?php echo $qty?></td>
                                <td><?php echo $prd_price?></td>
                                <td><?php echo $prd_size ?></td>
    <td><input type="checkbox" name="remove[]"  value="<?php echo $prd_id?>"></td>
                                <td><?php echo $sub_total ?> </td>

                            </tr>
                            <?php } } ?>
                            </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="6">Total</th>
                                <th colspan="2"><?php totalPrice();?></th>

                              </tr>
                        </tfoot>
                    </table>
                </div><!----table-responsive end--->
                 <div class="box-footer">
                     <div class="pull-left"><!----pull-left start-->
                        <button><a href="fly.php">
                        <i class="fa fa-chevron-left"></i>Continue shopping</a></button>

                     </div><!---pull-left end-->
                     <div class="pull-right">
     <button  type="submit" name="update" value="update_cart">
                             <a href="productCart.php?p_id=<?php echo $p_id?>">
                             <i class="fa fa-refresh"><?php echo update_cart();?>
                             Update cart</i></a>
                         </button>
                         <button><a href="address.php">
                             proceed to checkout
                             <i class="fa fa-chevron-right"></i>

                         </a></button>

                     </div>
                    </div>
              </form>
    </div>
    <?php
    
    
    ?>
    
</div><!---col-md-9 end--->
<div class="col-md-3">
  <div class="box" id="summary">
      <div class="box-header">
          <h3>Order summary</h3>
      </div>
      <p>
          shipping and additional costs are calculated based on the value you have entered
      </p>
      <div class="table-responsive">
          <table class="table">

          <tbody>

              <tr>
                  <td>Order subtotal</td>
                  <td><?php echo $total?> </th>
                  
            </tr>
            <tr>
                  <td>shipping and handling</td>
                  <th>INR 0</th>
            </tr>
            <tr>
                  <td>Tax</td>
                  <th>INR 0</th>
            </tr>
            <tr>
                  <td>Total</td>
                  <th><?php echo $total?></th>
            </tr>
</tbody>
</table>
          </div>
      </div>
  </div>
</div>
</body>
</html>
