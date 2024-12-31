<?php
	session_start();
	
	if (!isset($_SESSION['manager_ID'])){
		header('Location: manager_control.php');
	}
?>