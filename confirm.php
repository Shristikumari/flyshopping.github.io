<?php include('myaccount.php');
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
}
?>
<html>
<head>
</head>
<body>
<style>
        body{
            background-color:rgb(223, 221, 221);
            font-size:18px;
        }
        </style>


<div class="col-md-9">
    <div class="box" id="address">
           <form  actin="confirm.php?update_id=<?php echo $order_id?>" method="post" class="form-responsive" id="next">
               <h3>confirm payment </h3>
               <div class="form-group">
               <label for="no">Invoice Number</label>   
             <input type="text" class="form-control" name="invoice_no">
              </div>
         <div class="form-group">
             <label for="no">Amount</label>
              <input type="text" class="form-control" name="amount">
         </div>
         <div class="form-group">
         <label>Select Payment method</label>
         <select class="form-control" name="mode">
             <option>Bank transfer</option>
             <option>PayPal</option>
             <option>Paytm</option>

         </select>
         </div>
         <div class="form-group">
         <label>Transition Number</label>
              <input type="date" class="form-control" name="tn">
         </div>

         <div class="form-group">
         <label>Payment Date</label>
              <input type="date" class="form-control" name="date">
         </div>

 <button type="btn"  name="confirm" >confirm</button>
 <button type="btn"  id="cancel">Cancel</button>

              </div><!-------add end-->
              <?php 
              if(isset($_POST['confirm'])){
                  $update_id=$_GET['update_id'];
                  $invoice=$_POST['invoice_no'];
                  $amount=$_POST['amount'];
                  $payment=$_POST['mode'];
                  $Tn=$_POST['tn'];
                  $date=$_POST['date'];
                   $inser="INSERT INTO payment set invoice_id='$invoice',payment_mode='$payment'
                   ,amount='$amount',ref_no='$tn',payment_date='$date'";
              }
              ?>
            </form>
</div><!---main row end-->

</body>
</html>