<?php
session_start();
	$id = $_POST['tid'];
	
	//Import a file
	require_once("connection.php");
	
	$sql = "DELETE from train WHERE t_id='$id'";
	$run = mysqli_query($con,$sql)or die(header('location:Train.php?msg=Could not deleted'));
	//or die(mysqli_error($con));

	
	echo '<script type="text/javascript">'; 
			echo 'alert("seccessfully deleted the train details");'; 
			echo 'window.location.href = "Train.php";';
			echo '</script>';
	























?>