<?php
include('include/login_check.php'); 	
	
	$error="";
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		include('include/connect.php');
		
        $id=$_POST['id'];
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$age=$_POST['age'];
        $location=$_POST['location'];
        $contact_of_gurdian=$_POST['contact_of_gurdian'];
        $disease=$_POST['disease'];
        

		      	$sql="INSERT INTO residents_info VALUES ('$id', '$name', '$sex', '$age', '$location', '$contact_of_gurdian', $disease)";

				$stid  = mysqli_query($conn, $sql);
			

				header('Location: resident.php');
		    }
            
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>old home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/pos.css">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</head>

<body>

	<div class="container">
        <div class="row">
            <img class="logo" src="pictures/add.png">
        </div>  
    </div>
    
    <div class="container">
        
        <form action="add_resident.php" method="post">
        <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>ID</label></div>
                    <span class="error"><?php echo $error ?></span>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="id" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>Name</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="name" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>Sex</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="sex" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>Age</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="age" required="required">
                    </div>
                </div>
            </div>
        

            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>Location</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="location" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>Contact-of_Gurdian</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="contact_of_gurdian" required="required">
                    </div>
                </div>
            </div>
            
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>Disease</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="disease" required="required">
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