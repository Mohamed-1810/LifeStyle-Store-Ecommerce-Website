<?php 
require('include/common.php');
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$user_id=$_SESSION['user_id'];
$item_id=$_GET['itemid'];

$query="UPDATE user_item SET Status='Confirmed' WHERE user_id='$user_id' AND item_id='$item_id' AND Status='Added to Cart'";
$res=mysqli_query($con, $query) or die(mysqli_error($con));
header('location:cart.php');
?>