<?php
$con=mysqli_connect('localhost','root','','fly');
function getUserIP(){
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        $ip=$_SERVER['REMOTE_ADDR'];
    }


}
function addCart(){
    global $con;
    if(isset($_GET['add_cart'])){
        $ip_add=getUserIP();
        $p_id=$_GET['add_cart'];
        $check_prd="SELECT * FROM cart where ip_add='$ip_add' AND p_id='$p_id'";
        $run_check=mysqli_query($con,$check_prd);
        if(mysqli_num_rows($run_check)>0){
            echo "<script>alert('This product is already added in cart)</script>";
            echo "<script>window.open('productdetail.php?prd_id=$p_id','_self')</script>";
        }
        else {    
 $query="INSERT INTO cart set p_id='$p_id',ip_add='$ip_add',qty='$prd_quty',size='$prd_size'";
               $run=mysqli_query($con,$query);
            echo "<script>window.open('productdetail.php?prd_id=$p_id ','_self')</script>";
        }
    }
}
//item count //
function item(){
    global $con;
    $ip_add=getUserIP();
    $get_item="SELECT * FROM cart where ip_add='$ip_add'";
    $run_item=mysqli_query($con,$get_item);
    $count=mysqli_num_rows($run_item);
    echo $count;

}
//Total price//
function totalPrice(){
    global $con;
    $ip_add=getUserIP();
    $total=0;
    $select_item="SELECT * FROM cart where ip_add='$ip_add'";
    $run_item=mysqli_query($con,$select_item);
    while($record=mysqli_fetch_array($run_item)){
        $prd_id=$record['p_id'];
        $prd_qty=$record['qty'];
        $get_price="SELECT * FROM products where prd_id='$prd_id'";
        $run_price=mysqli_query($con,$get_price);
        while($row=mysqli_fetch_array($run_price)){
            $sub_total=$row['prd_price'];
            $total +=$sub_total;
        }

    }
echo "$total";

}
//update//
function login(){
session_start();
if($_SESSION['logged']==true){
  echo $_SESSION["uname"];
}
elseif($_SESSION['logged']==false){
  echo '<a href="login.php"><span>Login/Register</span></a>';
}
}
//cart item delete//
//update//
function update_cart(){
    if(isset($_POST['update'])){
        $p_id=$_GET['p_id'];
        $del="DELETE * FROM cart where p_id='$p_id'";
        $run=mysqli_query($con,$del);
        if($run){
            echo "<script>window.open('productCart.php','_self')</script>";
        }
    }else{
        echo "error";
    }
}
/*function update_cart(){
    global $con;
    if(isset($_POST['update_cart'])){
        foreach($_POST['p_id'] as $remove_id){
            $delete_product="DELETE FROM cart where p_id='$remove_id'";
            $run_del=mysqli_query($con,$delete_product);
            if($run_del){
                echo "<script>window.open('productCart.php','_self')</script>";
            }
        }
    }
}
echo @$up_cart=update_cart();*/

?>      