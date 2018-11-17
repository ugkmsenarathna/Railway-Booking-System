<?php
session_start();
	$id = $_POST['tid'];
	$st_s = $_POST['st_s'];
	$st_t = $_POST['st_t'];
	$e_s = $_POST['e_s'];
	$e_t = $_POST['e_t'];
	
	//Import a file
	require_once("connection.php");
	
	$sql = "INSERT INTO trip(t_id,s_station,s_time,e_station,e_time) VALUES('$id','$st_s','$st_t','$e_s','$e_t')";
	$run = mysqli_query($con,$sql)or die(header('location:Trip.php?msg=Could not inserted'));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Successfully aded the trip");'; 
			echo 'window.location.href = "Trip.php";';
			echo '</script>';
	























?>