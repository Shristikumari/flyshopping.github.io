<?php include('myaccount.php');
$con=mysqli_connect('localhost','root','','fly');
?>

<html>
<head>
 <meta name="viewport" content="widht=device-width ,initial scale=1">
<link rel="stylesheet"  type="text/css" href="account.css?vm<?php time();?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        body{
            background-color:rgb(223, 221, 221);
        }
        </style>

    <div class="col-md-9">
    <div class="box" id="address">
           <form class="form-responsive" id="next">
               <h3>Manage Address</h3>
               <div class="form-group">
 <input type="text" class="form-control" id="Addnew" onClick="Addaddress()" placeholder="+ ADD A NEW ADDRESS" style="width:90%;background-color:#fffffff8;">
              </div>
              <div class="add" id="myadd">
         <div class="form-group">
         <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="name">
         </div>
         <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="10-degit mobile number">
    </div>
              </div><br><br><br>
         <div class="form-group">
         <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="pincode">
              </div>

         <div class="col-xs-3">

              <input type="text" class="form-control" placeholder="location">
        </div>
        </div><br><br><br>
        <div class="form-group">
<input type="text" class="form-control" placeholder="Address" style="margin-left:55px;height:100px;width:422px;">
            </div>
        <div class="form-group">
         <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="City">
              </div>
              <div class="col-xs-3">

              <input type="text" class="form-control" placeholder="State">
              </div>
              </div><br><br><br>
              <div class="form-group">
              <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="Landmark">
              </div>
              <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="Alternate phone number">
            </div>
            </div><br><br><br>
                        <h6 style="margin-left:60px;">Address Type</h6>
              <input type="radio" name="button" id="btn" style="margin-left:60px;">Home
               <input type="radio" name="button" id="btn">Work<br><br>
 <button type="btn" class="btn btn-primary" id="save" >Save</button>
 <button type="btn" class="btn btn-default" id="cancel">Cancel</button>

              </div><!-------add end-->
            </form>
</div><!---main row end-->
</body>
    </html>