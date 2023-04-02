<?php 
require 'include/common.php';

$name=$_POST['name'];
$name=mysqli_real_escape_string($con, $name);

$email=$_POST['e-mail'];
$email=mysqli_real_escape_string($con, $email);

$pwd=$_POST['pwd'];
$pwd=MD5($pwd);
$pwd=mysqli_real_escape_string($con, $pwd);

$repwd=$_POST['re-pwd'];
$repwd=MD5($repwd);
$repwd=mysqli_real_escape_string($con, $repwd);


///Checking the password and re-type password same
if($pwd!=$repwd){
    header("location:signup.php?error=Password Not Matched");
    exit();


}



$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";



//to check the valid email//
$query="SELECT * FROM user_reg WHERE Email='$email'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$num=mysqli_num_rows($result);
if($num !=0){   
    $m="<span class='red'>Email ALready Exists</span>";
    header('location: signup.php?m1=' .$m);     
}

else if(!preg_match($regex_email, $email)) {
    $m="<span class='red'>Not a valid Email</span>";
    header('location: signup.php?m1=' .$m);
}

else{
$query="insert into user_reg(Name, Email, Password)values('$name','$email','$pwd')";
$total=mysqli_query($con, $query) or die(mysqli_error($con));
$user_id=mysqli_insert_id($con);
$_SESSION['email']=$email;
$_SESSION['user_id']=$user_id;
header('location:product.php');


}
?>
