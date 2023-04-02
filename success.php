 <?php 

require("include/common.php");
if(!isset($_SESSION['email'])){
    header('location:index.php');
}

$user_id=$_SESSION['user_id'];

$num=$_SESSION['n'];
$item=$_SESSION['a'];


$i=0;
//echo"hello";

//echo "$item[1]";


while($num>0){
$query="UPDATE user_item SET Status='Confirmed' WHERE user_id='$user_id' AND Status='Added to cart' AND item_id='$item[$i]'";
mysqli_query($con,$query) or die(mysqli_error($con));
//echo "$item[$i]";
$i=$i+1;
$num=$num-1;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        <link rel="stylesheet" href="style1.css">
    <style>
        .jumbotron{
            margin-top:60px;

        }
        .row{
            min-height:450px;   
        }
        h2{
            padding:0 15px;
        }
        </style>
</head>
<body>
    <?php 
    include("include/header.php");
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
                            if(isset($_GET['success'])){?>
                            <p class="errr"><script type="text/javascript">
	                        swal( "Your order is Confirmed","", "success");
                            </script>
                            </p>
                            <?php }  ?>

    <div class="banner-cart">
        <div class="row">
            <div class="col-md-12 ">
                <div class="jumbotron">
                    <span align="center">
                    <h2 style="color:rgb(85, 80, 80);">Your Product will reach your Home in 4-7 working days.<span style="color:green;"> Thank you for shopping with us</span></h3></span><hr>
                    <p align="center">Click <a href="product.php">here</a> to purchase any other item.</p>
   
                </div>
            </div>
        </div>
    </div>

    <?php 
    include("include/footer.php");
    ?> 
    
</body>
</html>
    