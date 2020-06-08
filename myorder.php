<?php include('myaccount.php'); ?>

<html>
<head>
 <meta name="viewport" content="widht=device-width ,initial scale=1">
<link rel="stylesheet"  type="text/css" href="account.css?vm<?php time();?>">
</head>
<body>
    <style>
        body{
            background-color:rgb(223, 221, 221);
            font-size:13px;
        }
        table{
              border-collapse:collapse;  
            }
            td{
                border:1px solid #dddddd;
                background-color:#dddddd;
            }

        </style>

<div class="col-md-9" style="position:relative;top:18px;">
    <div class="box" id="inform">
           <form class="form-responsive">
               <h3 style="text-align:center;">My Order</h3>
               <hr>
               <div class="table-responsive"><!----table-responsive start--->

<table class="table">
    <thead>
    <tr>
      <th>Sr No.</th>
       <th>Due Amount</th>
        <th>Invoice Number</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Order Date</th>
        <th>Paid/Unpaid</th>
        <th>Status</th>

       </tr>

    </thead>
    <tbody>
        <?php 
        $user_session=$_SESSION['uname'];
        $get="SELECT * FROM register where uname='$user_session'";
        $run=mysqli_query($con,$get);
        $row=mysqli_fetch_array($run);
        $u_id=$row['u_id'];
        $get_order="SELECT * FROM customer_order where customer_id='$u_id'";
        $run_order=mysqli_query($con,$get_order);
        $i=0;
        while($row_order=mysqli_fetch_array($run_order)){
            $order_id=$row_order['order_id'];
            $due_amount=$row_order['due_amount'];
            $invoice_no=$row_order['invoice_no'];
            $qty=$row_order['qty'];
            $size=$row_order['size'];
            $order_date=$row_order['order_date'];
            $order_status=$row_order['order_status'];
           $i++;
           if($order_status==='pending'){
               $order_status="Unpaid";
           }else {
            $order_status="Paid";
        }

        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $due_amount ?></td>
            <td><?php echo  $invoice_no?></td>
            <td><?php echo $qty?></td>
            <td><?php echo $size ?></td>
            <td><?php echo $order_date ?></td>
            <td><?php echo $order_status?></td>
 <td><a href="confirm.php?order_id=<?php echo $order_id?>" >
     Confirm If Paid</a></td>
        </tr>

    <?php } ?>
        </tbody>
</table>
</div><!----table-responsive end--->

           </form>

        
    </div>

</div><!---main row end-->
    </head>
    </html>