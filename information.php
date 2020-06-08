<?php include("myaccount.php");
$con=mysqli_connect('localhost','root','','fly');
?>

<html>
<head>
 <meta name="viewport" content="widht=device-width ,initial scale=1">
 <link rel="stylesheet"  type="text/css" href="account.css?vm<?php echo time();?>">
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
    <div class="box" id="inform">
           <form class="form-responsive">
               <h3>personal information</h3>
               <div class="form-group">
               <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="flyshoping" style="margin-left:20px;">
    </div>
    <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="customer" style="margin-left:15px;">
    </div><br><br><br>

               <h5>Your Gender</h5>
               <input type="radio" name="button" id="btn">Male
               <input type="radio" name="button" id="btn">Female

               </div>
               <h3>Email Address</h3>
               <div class="form-group">
               <input type="email" class="form-control">
                 </div>
                 <h3>Mobile Number</h3>
               <div class="form-group">
               <input type="email" class="form-control">
                 </div>

           </form>
           <h2>FAQs</h2>
    </div>

        
    </div>

</div><!---main row end-->
</body>
    </html>