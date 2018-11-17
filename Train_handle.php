<?php
session_start();
	$id = $_POST['tid'];
	$name = $_POST['name'];
	$nos = $_POST['nos'];
	
	//Import a file
	require_once("connection.php");
	
	$sql = "INSERT INTO train(t_id,name,nos) VALUES('$id','$name','$nos')";
	$run = mysqli_query($con,$sql)or die(header('location:train.php?msg=Could not inserted'));
	//or die(mysqli_error($con));
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Insertion seccessfull");'; 
			echo 'window.location.href = "train.php";';
			echo '</script>';
	























?>