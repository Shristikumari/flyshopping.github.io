<?php include('conection.php'); 
include('function.php');

?>
<?php
if(isset($_GET['u_id'])){
$u_id=$_GET['u_id'];
$ip_add=getUserIP();
$status="pending";
$invoice_no=mt_rand();
$select_cart="SELECT * FROM cart where ip_add='$ip_add'";
$run_cart=mysqli_query($con,$select_cart);
while($row=mysqli_fetch_array($run_cart)){
    $p_id=$row['p_id'];
    $qty=$row['qty'];
    $size=$row['size'];
  $get_product="SELECT * FROM products where prd_id='$p_id'";  
  $run_prd=mysqli_query($con,$get_product);
  while($row=mysqli_fetch_array($run_prd)){
      $sub_total=$row['prd_price'];
      $insert_order="INSERT INTO customer_order set customer_id='$u_id',
      due_amount='$sub_total',invoice_no='$invoice_no',qty='$qty',size='$size',
      order_date=NOW(),order_status='$status'";
        $run_ord=mysqli_query($con,$insert_order);
        $insert_pending_order="INSERT INTO pending_order set customer_id='$u_id',
        prd_id='$p_id',invoice_no='$invoice_no',qty='$qty',size='$size',
        order_status='$status'";
          $run_Pord=mysqli_query($con,$insert_pending_order);
            $delete="DELETE FROM cart where p_id='$p_id'";
            $run_del=mysqli_query($con,$delete);
            ?>  
        <script>window.alert('ThankYou For shopping with Us!')</script>
          <script>window.open('myaccount.php','_self')</script>
<?php          
  }

}

}
?>