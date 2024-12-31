<?php
    include('include/login_check.php');	
	
	$error="";
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		include('include/connect.php');
		
		$employee_id=$_POST['employee_id'];
		$employee_name=$_POST['employee_name'];
        $employee_adrs=$_POST['employee_adrs'];
        $employee_contact=$_POST['employee_contact'];
				$sql="INSERT INTO employee VALUES('$employee_id','$employee_name','$employee_adrs','$employee_contact')";
				$stid  = mysqli_query($conn, $sql);
				
				header('Location: employee_list.php');
	}
?>

<html>
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
            <img class="logo" src="pictures/acs.png">
        </div>  
    </div>
    
    <div class="container">
        
        <form action="add_employee.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>employee id</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="employee_id" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>employee name</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="employee_name" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>employee adress</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="employee_adrs" required="required">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-4 col-md-2"><label>employee contact</label></div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="employee_contact" required="required">
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
            <button type="button" class="btn " style="float: right;">
				<a href="manager_control.php">Back to Menu</a>
			</div>
        </div>  
		<br/>
    </div> 
    
</body>
</html>