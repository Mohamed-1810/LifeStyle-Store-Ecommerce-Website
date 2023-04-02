<?php

require("include/common.php");
if(!isset($_SESSION['email'])){
    loaction('header:index.php');
}
else{
    session_destroy();
    header('location:index.php');
}
?>