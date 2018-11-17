<?php
session_start();
	$id = $_POST['id'];
	
	//Import a file
	require_once("connection.php");
	
	$sql = "DELETE from trip WHERE trip_no='$id'";
	$run = mysqli_query($con,$sql)or die(header('location:Home.php?msg=Could not deleted'));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("seccessfully deleted the trip details");'; 
			echo 'window.location.href = "Home.php";';
			echo '</script>';
	























?>