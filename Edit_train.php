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
   
   $_SESSION['tid'] = $rec['t_id']; //or $rec[1]
   $_SESSION['name'] = $rec['name']; //or $rec[2] 
   $_SESSION['nos'] = $rec['nos']; //or $rec[1]
   
    $id=$_SESSION['t_id'];
   $name=$_SESSION['name'];
   $nos=$_SESSION['nos'];
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
               <div class="panel-heading">Edit/Delete Train Details</div>
               <div class="panel-body">
                  <form action="Edit_train.php" method="post">
                     <div class="form-group">
                        
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text"  value=<?php echo $id; ?> class="form-control"  name="tid">
                           </div>
                           <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                     </div>
                  </form>
                  <div class="form-group">
                     <label for="usr">Name:</label>
                     <input type="text" class="form-control" value=<?php echo $name; ?> name="name">
                  </div>
                  <div class="form-group">
                     <label for="usr">No of seats:</label>
                     <input type="text" class="form-control" value=<?php echo $nos; ?> name="nos">
                  </div>
				   <form action="Edit_train_handle.php" method="post">
                  <div class=col-md-2>
                     <button type="submit" class="btn btn-success">Save</button>
                     </div>
					  </form>
                  <div class=col-md-4></div>
				   <form action="Delete_train_handle.php" method="post">
                  <div class=col-md-2>
                     <button type="submit" class="btn btn-danger">Delete</button>
                  </div>
				   </form>
               </div>
            </div>
         </div>
      </div>
      <?php
         } 
         else
         {
         		echo '<script type="text/javascript">'; 
         		echo 'alert("Train ID is incorrect. Please check again");'; 
         		echo 'window.location.href = "Train.php";';
         		echo '</script>';		
         }
         ?>
   </body>
</html>