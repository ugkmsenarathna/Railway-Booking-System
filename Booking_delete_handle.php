<?php
session_start();
	$id = $_POST['id'];
	
	//Import a file
	require_once("connection.php");
	
	$sql = "DELETE from booking WHERE b_id='$id'";
	$run = mysqli_query($con,$sql)or die(header('location:Home.php?msg=Could not deleted'));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("seccessfully deleted the booking details");'; 
			echo 'window.location.href = "Home.php";';
			echo '</script>';
	























?>