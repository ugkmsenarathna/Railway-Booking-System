<?php
session_start();
	$trip_no = $_POST['trip_no'];
	
	//Import a file
	require_once("connection.php");
//blah blah
	
	$sql = "DELETE from trip WHERE trip_no='$trip_no'";
	$run = mysqli_query($con,$sql)or die(header('location:Trip.php?msg=Could not deleted'));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("seccessfully deleted the trip details");'; 
			echo 'window.location.href = "Trip.php";';
			echo '</script>';
	























?>