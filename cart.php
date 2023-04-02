<?php 
require("include/common.php");
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
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
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <div class="banner-cart">
            <div class="row" style="min-height:400px;margin-top:80px;">
                <div class="col-xs-6 col-xs-offset-3">
                    <table class="table table-bordered " bordercolor="red" >


                        <?php 
                        $sum=0;
                        $user_id=$_SESSION['user_id'];
                        $query="SELECT item.id,  item.name AS Name, item.price AS Price  FROM user_item JOIN item ON user_item.item_id = item.id WHERE user_item.user_id='$user_id' and status='Added to cart'";
                        $result=mysqli_query($con, $query) or die(mysqli_error($con));
                        if(mysqli_num_rows($result)>=1){
                        ?>
                        <thead>
                                <tr >
                                    <th class="text-center">Item Number</th>
                                    <th class="text-center">Item Name</th>
                                    <th class="text-center">Price</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php
                        $n=0;
                        $c=0;
                        $b=0;
                        while($row=mysqli_fetch_array($result)){
                            $sum+=$row['Price'];
                            $id=$row['id'];
                            $n=$n+1;
                            
                            if($b==0){
                            $a=array($id);
                            }
                            $b=$b+1;
                            
                            if($c>0){
                                array_push($a,$id);
                            }
                            $c=$c+1;
                            $_SESSION['n']=$n;
                            echo "<tr><td>" . "#" . $n . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                        }
                        $id=rtrim($id, ", ");
                
                        $_SESSION['a']=$a;
                        ?>
                      <?php
                        echo "<tr><td></td><td style='color:darkblack;font-weight:bold;font-size:20px;'>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?success=done' class='btn btn-success'>Confirm Order</a></td></tr>";
                        
                        ?>
                        </tbody>
                        <?php
                        }
                        else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        
                    
                    </table>
                    <form text-align="right"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IfEw9pJLeRCCEp" async> </script> </form>
                        
                </div>
            </div>
        </div>
<?php 
        include "include/footer.php";
        ?>
        </body>
</html>