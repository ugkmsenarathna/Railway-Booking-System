<?php
	session_start();

	//Connect to database
	require_once("connection.php");	
		
	$trip_no =$_SESSION['trip_no'];
	$t_id =$_SESSION['t_id'];
	$s_s =$_SESSION['s_s'];
	$s_t =$_SESSION['s_t'];
	$e_s =$_SESSION['e_s'];
	$e_t =$_SESSION['e_t'];
	
	
	$sql = "UPDATE trip SET t_id='$t_id',s_station='$s_s',e_station='$e_s',s_time='$s_t',e_time='$e_t' WHERE trip_no='$trip_no'";
	$run = mysqli_query($con,$sql) or die(header('location:Trip.php.php?msg=Failed to update'));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Seccessfully updated the trip details");'; 
			echo 'window.location.href = "Trip.php";';
			echo '</script>';
	
	
	
	
?>















