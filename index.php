<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		
		include('include/connect.php');
		
		$id=$_POST['manager_name'];
		$pass=$_POST['password'];
		
		$sql="SELECT * FROM manager WHERE manager_name='$id' AND password='$pass' ";
		$mysqli_result=mysqli_query($conn,$sql); 
		
		$count=mysqli_num_rows($mysqli_result);
		$row=mysqli_fetch_array($mysqli_result,MYSQLI_ASSOC);
		
		if ($count==1)
		{			
			session_start();
				if($row["manager_name"]=='sakura')
				{
					$_SESSION['manager_name']=$row["manager_name"];
				}
				if($row["password"]=='29')
				{
					$_SESSION['password']=$row["password"];
				}
				
				header('Location: manager_control.php');
		}
		mysqli_free_result($mysqli_result);
		mysqli_close($conn);
	}
?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>OLD HOME</title>
  <link rel="stylesheet" href="css/animate.css">

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
	top: calc(50px);

}



.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(pictures/login.jpg);
	background-size: cover;
	-webkit-filter: blur(0px);
	z-index: 0;
}

.grad{
	position: top;
	top: 20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}



.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>



</head>

<body>

<div class="body"></div>
		
		<div class="header">
			<div><span></span></div>
		</div>
		<br>
		<form name="frm_login" action="index.php" method="post">
		<div class="login for form-group input-group">
				<input class="form-control" type="text" placeholder="manager_name" name="manager_name"><br>
				<input class="form-control" type="password" placeholder="password" name="password"><br>
				<!-- <input type="submit" value="Login"> -->
				<li><button type="button" class="btn btn-block btn-default animated slideInLeft"><a href="manager_control.php">Login/a></button></li>

		
					<?php if ($_SERVER["REQUEST_METHOD"]=="POST"): ?>
                	<span style="color:red">Invalid Name or Passowrd.</span>
				<?php endif; ?>
				</form>
				</div>

  

</body>

</html>