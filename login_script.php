<?php 
require("include/common.php");
require("include/script.php");


$email=$_POST['email'];
$email=mysqli_real_escape_string($con, $email);

$pwd=$_POST['pwd'];
$pwd=mysqli_real_escape_string($con, $pwd);
$pwd=MD5($pwd);

$query="SELECT id  Email FROM user_reg WHERE Email='".$email."' AND Password= '".$pwd."'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$num=mysqli_num_rows($result);

if($num==0){
   
     header('location:login.php?error=Enter a valid Email and Password');
}
else{
    $row=mysqli_fetch_array($result);
    $_SESSION['email'] = $row['Email'];
  
    $_SESSION['user_id']= $row['0'];
    header('location:product.php');

 
}

?>




