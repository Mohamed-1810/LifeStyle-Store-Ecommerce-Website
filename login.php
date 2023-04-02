<?php
require("include/common.php");
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

<div class="banner">
    <div class="container login">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel  panel-primary">
                    <div class="panel-heading">
                        LOGIN
                    </div>
                    <div class="panel-body">
                        <form action="login_script.php" method="POST">
                            <div class="text-warning">
                                <p>Login to make Purchase   </p>
                            </div>
                            <?php
                            if(isset($_GET['error'])){?>
                            <p class="errr"><script type="text/javascript">
	                        swal("Oops", "Invalid Email and Password", "error");
                            </script>
                            </p>
                            <?php }  ?>
                            <input  class="form-control" type="email" placeholder="Email" name="email"><br>
                            <input type="Password" class="form-control"placeholder="Password" name="pwd"><br><br>
                            <button type="submit" name="btn" class="btn btn-login btn-primary" value="submit" >login</button>
                            
                        </form>

                        <br>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have a account?<a href="signup.php"> Register</a></p>
                        <p CLASS="frgt">Forgot<a href="#"> Password?</a></p>
                    </div>
                    
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