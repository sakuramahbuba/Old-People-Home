<?php
    include('include/login_check.php'); 
    
    $error="";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        include('include/connect.php');
        
        $emergency=$_POST['emergency'];
        $number=$_POST['number'];
                $sql="INSERT INTO `emergency`(`emergency`, `number`) VALUES('$emergency','$number')";
                $stid  = mysqli_query($conn, $sql);
                
                header('Location: emergency.php');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Old Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/pos.css">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</head>

<body>
    <div class="container">
        <div class="row">
            <img class="logo" src="pictures/num.jpg">
        </div>  
    </div>
    
    <div class="container">
        
        <form action="add_number.php" method="post">
        <fieldset>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>emergency</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="emergency" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>number</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="number" required="required">
                    </div>
                </div>
            </div>
            
            
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-6 col-md-2">
                       <button type="submit" class="btn btn-sm btn-primary btn-block">Add</button>
                    </div>
                </div>
            </div>

            </fieldset>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-2">
                <a href="manager_control.php">Back to Menu</a>
            </div>
        </div>  
        <br/>
    </div> 
    
</body>
</html>