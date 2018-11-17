<?php
   session_start();
   
	require_once("connection.php");	
	$id = $_POST['tid'];
	
	//sql statement to check if a record exists with the provied username and password
	$sql = "SELECT * FROM trip WHERE trip_no='$id'";
	$run = mysqli_query($con,$sql);

	//check if the query is run successfully
	if(!$run)
	{
		die(mysqli_error($con)); //Error if sql could not be run
	}

	//Check if the query returns any records
	if(mysqli_num_rows($run) > 0)
	{	
		//Put the returned record into an array called $rec
		$rec = mysqli_fetch_array($run);
	
		//Create session variables
		
		$_SESSION['trip_no'] = $rec['trip_no']; //or $rec[1]
		$_SESSION['t_id'] = $rec['t_id']; //or $rec[2] 
		$_SESSION['s_s'] = $rec['s_station']; //or $rec[1]
		$_SESSION['s_t'] = $rec['s_time']; //or $rec[1]
		$_SESSION['e_s'] = $rec['e_station']; //or $rec[2] 
		$_SESSION['e_t'] = $rec['e_time']; //or $rec[1]
		
		//redirect user to search tree page
		//header('location:Search_train.php');
	$trip_no =$_SESSION['trip_no'];
	$t_id =$_SESSION['t_id'];
	$s_s =$_SESSION['s_s'];
	$s_t =$_SESSION['s_t'];
	$e_s =$_SESSION['e_s'];
	$e_t =$_SESSION['e_t'];
	
?>

<!DOCTYPE html>
<html>
   <link rel="stylesheet" href="css/bootstrap.css">
   <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Railway Bookings</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Home.php">Home</a></li>
      <li><a href="Train.php">Manage Trains</a></li>
      <li><a href="Trip.php">Manage Trips</a></li>
	   <li><a href="Passenger.php">Manage Passengers</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <form action="Index.php">
      <button class="btn btn-danger navbar-btn" align="right" onclick="Index.php">Logout</button>
	  </form>
    </ul>
    
  </div>
</nav>
   
   
      <div class=col-md-2></div>
      <div class="row">
         <div class=col-md-3>
            <h3></h3>
            <div class="panel panel-success">
               <div class="panel-heading">Trip Details</div>
               <div class="panel-body">
                  <form action="Search_trip.php" method="post">
                     <div class="form-group">
                        <label for="usr">Trip ID :</label> <?php echo $trip_no; ?>
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text" class="form-control"  name="tid">
                           </div>
                           <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                     </div>
                  </form>
                  <div class="form-group">
                     <label for="usr">Train ID:</label>
                     <?php echo $t_id; ?>
                  </div>
                  <div class="form-group">
                     <label for="usr">Starting Station:</label>
                     <?php echo $s_s; ?>
                  </div>
				  <div class="form-group">
                     <label for="usr">Starting Time:</label>
                     <?php echo $s_t; ?>
                  </div>
                  <div class="form-group">
                     <label for="usr">End Station:</label>
                     <?php echo $e_s; ?>
                  </div>
				  <div class="form-group">
                     <label for="usr">End Time:</label>
                     <?php echo $e_t; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
	  	<?php
	} 
	else
	{
			echo '<script type="text/javascript">'; 
			echo 'alert("Trip ID is incorrect. Please check again");'; 
			echo 'window.location.href = "Trip.php";';
			echo '</script>';		
	}
	?>
   
   </body>
</html>
