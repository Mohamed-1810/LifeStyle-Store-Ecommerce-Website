<?php 
require("include/common.php");
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$opwd=$_POST['old_pwd'];
$opwd=mysqli_real_escape_string($con,$opwd);
$opwd=MD5($opwd);

$npwd=$_POST['new_pwd'];
$npwd=mysqli_real_escape_string($con,$npwd);
$npwd=MD5($npwd);

$rnpwd=$_POST['rnew_pwd'];
$rnpwd=mysqli_real_escape_string($con,$rnpwd);
$rnpwd=MD5($rnpwd);

$user_id=$_SESSION['user_id'];
$query="SELECT Password FROM user_reg WHERE id='$user_id'";
$res=mysqli_query($con, $query) or die(mysqli_error($$con));
$row=mysqli_fetch_array($res);
$origin_pwd=$row['Password'];

if($origin_pwd!=$opwd){
    echo "Incorrect Current Password";
}
else if($npwd!=$rnpwd){
    echo "Re-type New Password are not Matching";
}
else{
    $query="UPDATE user_reg SET Password='$npwd' WHERE id='$user_id'";
    mysqli_query($con,$query) or die(mysqli_error($con));
    header('location:setting_success.php');
    
}
?>