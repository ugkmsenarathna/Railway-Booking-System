<?php
	session_start();

	//Connect to database
	require_once("connection.php");	
		
	$tid = $_SESSION['t_id'];
	$name = $_SESSION['name'];
	$nos = $_SESSION['nos'];
	
	$sql = "UPDATE train SET name='$name',nos='$nos' WHERE t_id='$tid'";
	$run = mysqli_query($con,$sql) or die(header('location:Train.php.php?msg=Failed to update'));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Seccessfully updated the train details");'; 
			echo 'window.location.href = "Train.php";';
			echo '</script>';
	
	
	
	
?>















