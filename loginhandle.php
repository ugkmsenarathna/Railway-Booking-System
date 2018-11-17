<?php
	session_start();

	//Connect to database
	require_once("connection.php");	
		
	//Use escape strings to prevent SQL injections
	$un = $_POST['un'];
	$pw = $_POST['pw'];
 
	
	//sql statement to check if a record exists with the provied username and password
	$sql = "SELECT username FROM admin WHERE username='$un' AND password='$pw'";
	$run = mysqli_query($con,$sql) or die(header('location:index.php?msg=Login failed'));

	//Check if the query returns any records
	if(mysqli_num_rows($run) > 0)
	{	
		//Put the returned record into an array called $rec
		$rec = mysqli_fetch_array($run);
	
		//Create session variables
		$_SESSION['nic'] = $rec['p_id']; //or $rec[1]
		
		//redirect user to home page
		header('location:Home.php');
	} 
	else
	{
			echo '<script type="text/javascript">'; 
			echo 'alert("Username and/or Password incorrect.\\nTry again.");'; 
			echo 'window.location.href = "index.php";';
			echo '</script>';
	}
















