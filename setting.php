<?php 
require('include/common.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
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
    <div class="banner">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Change the Password<h4>
                    </div>
                    <div class="panel-body">
                    <form action="setting_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" name="old_pwd" placeholder="Current Password" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" name="new_pwd" placeholder="New Password" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" name="rnew_pwd" placeholder="Re-type New Password" class="form-control" required="true">
                        </div>
        
                        <button type="submit" class="btn btn-primary">Change</button>
        
                    </form>
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
