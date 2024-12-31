<?php
    include('include/login_check.php');    
    
    $error="";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        include('include/connect.php');         
        
        $time=$_POST['time'];
        $activties=$_POST['activities'];
        

            $sql="SELECT * FROM schedules";
            $stid  = mysqli_query($conn, $sql);
            $info = mysqli_fetch_assoc($stid);
    
            if (mysqli_num_rows($stid) != 0)
            {
                echo 'ok';
                $sql="UPDATE `schedules` SET `time`='$time', `activities`='$activities'";
                $stid  = mysqli_query($conn, $sql);
                
                header('Location: schedules.php');
            }
            else{
                $error="This supplier Doesn't exist";
            }
    }

    else 
    {
        include('include/connect.php');
        
        $sql_pass = "SELECT * FROM schedules";

$st  = mysqli_query($conn, $sql_pass);
$rslt = mysqli_fetch_assoc($st);

}

?>

<html>
<head>
<title>WHOLESALE</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/pos.css">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</head>

<body>
    <div class="container">
        <div class="row">
            <img class="logo" src="pictures/up.png">
        </div>  
    </div>
    
    <div class="container">
    
        <form action="update_schedules.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>time</label></div>
                    <span class="error"><?php echo $error ?></span>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="time" value="<?= $rslt['time'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>activities</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="activities" value="<?= $rslt['activities'] ?>" required="required">
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