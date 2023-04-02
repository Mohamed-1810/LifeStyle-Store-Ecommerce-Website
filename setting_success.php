<?php 
require('include/common.php');

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting_Success</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        <link rel="stylesheet" href="style1.css">
 
</head>
<body>
    <?php
    include 'include/header.php';
    ?>
    
        <div class="banner-cart">
            <h2 style="padding-top:80px;color:green;">Your Password Has Updated Successfully.<h2>
        </div>
    
    <?php
    include 'include/footer.php';
    ?>
    
</body>
</html>