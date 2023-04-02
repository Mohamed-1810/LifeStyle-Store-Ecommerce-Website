<?php 
include 'include/common.php';
echo $_SESSION['user_id'];
?>



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













            <div class="col-md-3 col-sm-6">
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
                                 <a href="cart-add.php?id=5" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php                           
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
 









           
           