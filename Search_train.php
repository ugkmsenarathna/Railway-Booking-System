<?php
   session_start();
   
	require_once("connection.php");	
	$id = $_POST['tid'];
	
	//sql statement to check if a record exists with the provied username and password
	$sql = "SELECT * FROM train WHERE t_id='$id'";
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
		
		$_SESSION['t_id'] = $rec['t_id']; //or $rec[1]
		$_SESSION['name'] = $rec['name']; //or $rec[2] 
		$_SESSION['nos'] = $rec['nos']; //or $rec[1]
		
		//redirect user to search tree page
		//header('location:Search_train.php');
	$age =$_SESSION['t_id'];
	$name =$_SESSION['name'];
	$nos =$_SESSION['nos'];
	
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
               <div class="panel-heading">Train Details</div>
               <div class="panel-body">
                  <form action="Search_train.php" method="post">
                     <div class="form-group">
                        <label for="usr">Train ID :</label> <?php echo $id; ?>
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text" class="form-control"  name="tid">
                           </div>
                           <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                     </div>
                  </form>
                  <div class="form-group">
                     <label for="usr">Name:</label>
                     <?php echo $name; ?>
                  </div>
                  <div class="form-group">
                     <label for="usr">No of seats:</label>
                     <?php echo $nos; ?>
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
			echo 'alert("Tree ID is incorrect. Please check again");'; 
			echo 'window.location.href = "Train.php";';
			echo '</script>';		
	}
	?>
   
   </body>
</html>
