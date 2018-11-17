<?php
session_start();
require_once('connection.php');
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
   


      <div class=col-md-1></div>
      <div class="row">
         <div class=col-md-4>
            <h3></h3>
            <div class="panel panel-default">
               <div class="panel-heading">Railway Bookings</div>
               <div class="panel-body">
				
				<div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th>Booking ID</th>
											<th>Passenger ID</th>
											<th>Train ID</th>
                                            <th>No of seats</th>
                                           
                                        </tr>
                                    </thead>
									
									
									
	<?php		
		
$sql = "SELECT * FROM booking";
$run = mysqli_query($con,$sql)or die(mysqli_error($con));
$run=mysqli_query($con,$sql);
$nor = mysqli_affected_rows($con);

	if($nor > 0)
						
	{	
			while($record = mysqli_fetch_array($run))
			{
				?>
		  
                                    <tbody>
                                        <tr>
                                            
                                            <td><?php echo $record["b_id"]; ?></td>
                                            <td><?php echo $record["p_id"]; ?></td>
                                            <td><?php echo $record["t_id"]; ?></td>
                                            <td><?php echo $record["nos"]; ?></td>
                                            
											
											<form action="Booking_delete_handle.php" method="post">
											<td><input type="submit" class="btn-danger" value="Claim" ></td>
											<input type="hidden" name="id" value="<?php echo $record["b_id"]; ?>"/>
                                           
                                            </form>
											
											</td>
                                        </tr>
                                        
                                    </tbody>
									
									
								<?php	
		
									
									}
	}
		
else
{
	echo "No bookings are avilible at the moment ";
}

?>	
								
                                </table>

                            </div>
							 
				
         </div>
		 </div>
		 </div>
		 
         <div class=col-md-6>
            <h3></h3>
            <div class="panel panel-primary">
               <div class="panel-heading">Trip Schedule</div>
               <div class="panel-body">
                 
				 <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th>Trip ID</th>
											<th>Train ID</th>
											<th>Starting Station</th>
                                            <th>Starting Time</th>
											<th>End Station</th>
                                            <th>End Time</th>
                                           
                                        </tr>
                                    </thead>
									
									
									
	<?php		
		
$sql = "SELECT * FROM trip";
$run = mysqli_query($con,$sql)or die(mysqli_error($con));
$run=mysqli_query($con,$sql);
$nor = mysqli_affected_rows($con);

	if($nor > 0)
						
	{	
			while($record = mysqli_fetch_array($run))
			{
				?>
		  
                                    <tbody>
                                        <tr>
                                            
                                            <td><?php echo $record["trip_no"]; ?></td>
                                            <td><?php echo $record["t_id"]; ?></td>
                                            <td><?php echo $record["s_station"]; ?></td>
                                            <td><?php echo $record["s_time"]; ?></td>
                                            <td><?php echo $record["e_station"]; ?></td>
                                            <td><?php echo $record["e_time"]; ?></td>
											
											<form action="Trip_delete_handle.php" method="post">
											<td><input type="submit" class="btn-danger" value="Remove" ></td>
											<input type="hidden" name="id" value="<?php echo $record["trip_no"]; ?>"/>
                                           
                                            </form>
											
											</td>
                                        </tr>
                                        
                                    </tbody>
									
									
								<?php	
		
									
									}
	}
		
else
{
	echo "No trips are avilible at the moment ";
}

?>	
								
                                </table>

                            </div>
							 
				 
               </div>
            </div>
			
         </div>
      </div>
   </body>
</html>