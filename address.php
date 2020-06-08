<?php include('naviga.php');
$con=mysqli_connect('localhost','root','','fly');
?>

<html>
<head>
</head>
<body>
    <!----===========================------------->
    <style>
        body{
            position:relative;
            top:10px;
        }
        .form-group .form-control{
         width:240px;
         height:40px;
         margin-left: 40px;
         position: relative;
         top:25px;
}
#save{
    padding:10px 50px 10px 60px;
    margin-left:60px;
}
#cancel{
    padding:10px 40px 10px 50px;

}
        </style>
 <!----===========================------------->

 <h1 style="margin-left:60px;position:relative;top:50px;">Add shiping Place</h1>
   <div class="col-md-9">
   <div class="add" id="add" 
   style="height:600px;position:relative;background-color:whitesmoke;top:50px;">
   <form  class="address" action="" method="post">
         <div class="form-group">
         <div class="col-xs-3">
         <input type="text" class="form-control" placeholder="location" name="loc">
              </div>

         <div class="col-xs-3">
         <input type="text" class="form-control" placeholder="City" name="city">
        </div>
        </div><br><br><br>
        <div class="form-group">
<input type="text" class="form-control" placeholder="Address" name="addr" style="margin-left:55px;height:100px;width:490px;">
            </div>
        <div class="form-group">
        <div class="col-xs-3">
         <input type="text" class="form-control" placeholder="State" name="state">
              </div>
              <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="Landmark" name="land">
              </div>
              </div><br><br><br>
              <div class="form-group">
              <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="phone number" name="altno">
              </div>
              <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="Alternate phone number" name="alt">
            </div>
            </div><br><br>
            <div class="form-group">
<input type="text" class="form-control" placeholder="pincode" name="pin" style="margin-left:55px;">
</div><br><br>

             <h6 style="margin-left:60px;">Address Type</h6>
              <input type="radio" name="button" id="btn" style="margin-left:60px;">Home
               <input type="radio" name="button" id="btn">Work<br><br>
<button type="submit"  id="save" name="save" ><a href="checkout.php" >
    Save</a></button>
 <button type="submit" id="cancel">Cancel</button>


    </form>

    </div>
</div>
    <?php
    if(isset($_POST['save']))
{
 echo $pin=$_POST['pin'];
 echo $addr=$_POST['addr'];
 echo $city=$_POST['city'];
 echo $loc=$_POST['loc'];
 echo $state=$_POST['state'];
 echo $land=$_POST['land'];
 echo $mobile=$_POST['altno'];
 echo $alt=$_POST['alt'];

$query="INSERT INTO customer_order set pincode='$pin',
address='$addr',city='$city',location='$loc',state='$state',
landmark='$land',phone_no='$mobile',alt_p_no='$alt'";
$sql=mysqli_query($con,$query);

if($sql == TRUE) { 
    echo "added" ;
}
else{
    echo "Product not added";
}
}
?>

    </body>
    </html>