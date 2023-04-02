<?php
require("include/common.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style3.css">
</head>
<body>
    <?php 
    include 'include/header.php';
    include 'check-if-added.php';
    ?>
    <div class="container" id="content">
            <!-- Jumbotron Header -->
        <div class="jumbotron home-spacer text-center" id="products-jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
        
        <div class="row text-center" id="cameras">
            <h1 style="padding-top:-10px;margin-top:-5px;">Cameras</h1>
            <div class="col-md-3 col-sm-6  home-feature">
                <div class="thumbnail">                        
                    <img src="imgs/1.jpg" alt="">
                    <div class="caption">
                        <h3>Cannon EOS </h3>
                        <p>Price: Rs. 36000.00 </p>
                        <?php 

                        if(!isset($_SESSION['email'])){
                        ?>
                            <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';

                            }
                            else{
                                
                                ?>
                                <a href="cart-add.php?id=1" name="add" class="btn btn-block btn-primary">Add to Cart</a>
                                <?php
                                

                            }
                        }
                        ?>
                
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="imgs/2.jpg" alt="">
                    <div class="caption">
                        <h3>NIKKO DSLR</h3>
                        <p>Price: Rs. 32000.00 </p>
                        <?php 
                        if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                        <?php 
                        }
                        else{
                            if(check_if_added_to_cart(2)){
                                echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                            }
                            else
                            {
                            ?>

                            <a href="cart-add.php?id=2" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                        
                            
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="imgs/3.jpg" alt="">
                    <div class="caption">
                            <h3>SONY DSLR</h3>
                            <p>Price: Rs. 38000.00 </p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=3" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                            
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="imgs/4.jpg" alt="">
                    <div class="caption">
                            <h3>Olympus DSLR </h3>
                            <p>Price: Rs. 33000.00 </p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=4" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                            
                    </div>
                </div>
            </div>
        </div>

             <!---ROW 2-->
             <div class="row text-center">
                <h1 style="padding-top:-10px;margin-top:-5px;">Watches<h1>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">

                        <img src="imgs/5.jpg" class="img">

                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>Titan Model8</h3>
                            <p>Price:Rs.13000</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=5" name="add" value="add"class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="imgs/6.jpg">
                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>Fasttrack Nitro</h3>
                            <p>Price:Rs.10000</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=6" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="imgs/7.jpg">
                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>HMT Milan</h3>
                            <p>Price:Rs.6000</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=7" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="imgs/8.jpg">
                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>Faber Luba</h3>
                            <p>Price:Rs.3000</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=8" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>
            <div class="row text-center">
                <h1 style="padding-top:-10px;margin-top:-5px;">Shirts</h1>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">

                        <img src="imgs/9.jpg" class="img">

                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>Indian Terrain</h3>
                            <p>Price:Rs.600</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=9" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="imgs/10.jpg">
                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>Celvin Kein</h3>
                            <p>Price:Rs.1000</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(10)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=10" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                             </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="imgs/11.jpg">
                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>Peter England</h3>
                            <p>Price:Rs.900</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(11)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=11" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                             </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="imgs/12.jpg">
                        <div class="thumbnail-content" style="text-align: center;">
                            <h3>Allen Solly</h3>
                            <p>Price:Rs.1200</p>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <a href="login.php" class="btn btn-block btn-primary">Buy Now</a>
                            <?php 
                            }
                            else{
                                if(check_if_added_to_cart(12)){
                                    echo '<a href="#" class="btn btn-block btn-sucess" disabled>Added to cart</a>';
                                }
                                else
                                {
                            ?>
                                 <a href="cart-add.php?id=12" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                            
                            </div>
                    </div>
                </div>
            </div>




        
        

                                
    </div>
    <?php
    include 'include/footer.php';
    ?>
</body>
</html>