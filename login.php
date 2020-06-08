<?php $con=mysqli_connect('localhost','root','','fly');
?>
<html>
<head>
<link rel="stylesheet" href="login.css?vm<?php time();?>">
</head>
<body>
    <center>
<div class="all">
    <div class="form-box">
    <h2>flyshopping</h2>
         <div class="button-box">
          <div id="btn"></div>
<button type="button" class="toggle-btn" onclick="login()">Log In</button>
<button type="button" class="toggle-btn" onclick="register()">Register</button>

              </div>
              
 <div  id="login" class="input-group">
     <form method="post">
<input type="text" class="input-field" name="uname" placeholder="User name" required>
 <input type="text" class="input-field" name="id" placeholder="User Email" required>
<input type="text" class="input-field" name="pass" placeholder="passworrd">
<button type="submit" name="Login" class="a">Login</button>
 </form>
 <?php

if(isset ($_POST['Login']))
{
    $uname = $_POST['uname'];
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    
  $sql="SELECT * FROM register WHERE uname='$uname' AND upassword = '$pass'";

  $query = mysqli_query($con,$sql);
 echo $row = mysqli_num_rows($query);

if($row<1)
 {
     ?>
    <script>alert('username password not matched');
     window.open('login.php','_self');
     </script>
     <?php
 }
 else{
     
    $data =mysqli_fetch_assoc($query); 
    session_start();
    $_SESSION['uname']=$uname;
    header('location:fly.php');
 }

}
 ?>
 
 </div>
 

<div class="second">
<form method="POST" id="register" class="input-group" >
 <input type="text" class="input-field" name="name" placeholder="Your Name" required>
 <input type="email" class="input-field" name="email" placeholder="Email Id" required>
 <input type="number" class="input-field" name="number" placeholder="Mobile number" required>
<input type="text" class="input-field" name="pas" placeholder="passworrd">
<input type="text" class="input-field" name="Cpas" placeholder="Confirm passworrd">
<button type="submit" name="submit" class="a">Register</button>
            </form>
            </div>
              </div>
           </div>
    <?php
    if(isset($_POST['submit']))
    {    
 $uname=$_POST['name'];
 $uemail=$_POST['email'];
 $unumber=$_POST['number'];
 $upass=$_POST['pas'];
 $uCpass=$_POST['Cpas'];

$query="INSERT INTO register set uname='$uname',uemail='$uemail',unumber='$unumber',upassword='$upass'
,upasswor_c='$uCpass'";
$sql=mysqli_query($con,$query);
if($sql==TRUE){
    echo "added";
}
else{
    echo "not added";
}
    }
?>

           <div class="footer-copyright-area">
            <div class="container-fluid">
           <hr><div class="row"></hr>
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
  <p>Copyright © 2020 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
     </center>
     <script>
         var x = document.getElementById("login");
         var y = document.getElementById("register");
         var z = document.getElementById("btn");
function register(){
    x.style.left="-400px";
    y.style.left="50px";
    z.style.left="110px";
} 
function login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0px";
}



         </script>

</body>
</html>
