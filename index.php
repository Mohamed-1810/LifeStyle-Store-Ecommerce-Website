<?php
include 'include/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPAssignment</title>
    <link rel="stylesheet" href="style4.css">


</head>
<body>
    <?php
    include 'include/header.php';
    ?>

    <div class="banner">
        <div class="container">
            <div class="row index">
                <div class=" col-xs-5 col-xs-offset-3 signup-bg">
                    <h1>We Sell Lifestyle</h1>
                    <p>Flat 40% offer on premium brands </p><br>
                    <button type="submit" class="btn btn-danger b"><a href="product.php">Shop Now</a></button>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'include/footer.php';
    ?>



</body>
</html>
