<?php
require('include/common.php');
if(isset($_SESSION['email'])){
    header('location:product.php');
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
    include 'include/header.php'
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 >Sign Up</h3>
                    </div>
                    <?php if(isset($_GET['error'])){?>
                    <script type="text/javascript">
                        swal("Oops!","Password are not Matched","error");
                    </script>
                    <?php }?>
                    <div class="panel-body">
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            
                            <div class="form-group">
                                <input type="email" name="e-mail" class="form-control"  id="email" placeholder="Email" required="True">
                            </div>
                            
                            <div class="form-group">
                                <input type="Password" name="pwd"  class="form-control" id="pwd" placeholder="Password" >
                            </div>

                            
                            <div class="form-group">
                                <input type="Password" name="re-pwd"  class="form-control" id="re-pwd" placeholder="Re-type Password" >
                            </div>
                                        
                            
                            <button type="submit" class="btn btn-primary" value="registration_submit" class="form-control">Register</button>
                        </form>
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