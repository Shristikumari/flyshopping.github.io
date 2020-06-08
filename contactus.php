<html>
<head>
 <meta name="viewport" content="widht=device-width ,initial scale=1">
<link rel="stylesheet"  type="text/css" href="fly.css?vm<?php time();?>">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.form-group{
margin-left:60px;
}
    </style>
<body>
    <div class="row">
    <div class="col-md-9">
        <div class="box">
             <div class="box-header">
                 <center>
                     <h2>Contact Us</h2>
                </center>
             </div>
             <form action="contactus.php" method="post">
                 <div class="form-group">
                     <lable>Name</lable>
                     <input type="text" name="name" required="" class="form-control">
                 </div>
                 <div class="form-group">
                     <lable>Email</lable>
                     <input type="text" name="email" required="" class="form-control">
                 </div>
                 <div class="form-group">
                     <lable>Subject</lable>
                     <input type="text" name="subject" required="" class="form-control">
                 </div>

                 <div class="form-group">
                     <lable>Massage</lable>
                     <textarea  name="massage" required="" class="form-control"></textarea>
                 </div>
                 <div class="text-center">
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                 </div>

             </form>
           </div>

        </div>

        </div>
</body>
</html>