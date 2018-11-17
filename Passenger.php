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
         <div class=col-md-6>
            <h3></h3>
            <div class="panel panel-default">
               <div class="panel-heading">Registered Passengers</div>
               <div class="panel-body">
				
				<div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th>Passenger ID</th>
											<th>Name</th>
											<th>Address</th>
                                            <th>Gender</th>
											<th>Telephone</th>
                                           
                                        </tr>
                                    </thead>
									
									
									
	<?php		
		
$sql = "SELECT p_id,name,address,gender,telephone FROM passenger";
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
                                            
                                            <td><?php echo $record["p_id"]; ?></td>
                                            <td><?php echo $record["name"]; ?></td>
                                            <td><?php echo $record["address"]; ?></td>
                                            <td><?php echo $record["gender"]; ?></td>
                                            <td><?php echo $record["telephone"]; ?></td>
											
											
											</td>
                                        </tr>
                                        
                                    </tbody>
									
									
								<?php	
		
									
									}
	}
		
else
{
	echo "No passengers registered at the system ";
}

?>	
								
                                </table>

                            </div>
							 
				
         </div>
		 </div>
		 </div>
		 
         <div class=col-md-3>
            <h3></h3>
            <div class="panel panel-primary">
               <div class="panel-heading">Search Passenger</div>
               <div class="panel-body">
                 
				  <form action="Search_passenger.php" method="post">
                     <div class="form-group">
                        <label for="usr">Passenger ID:</label>
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text" class="form-control" name="p_id">
                           </div>
                           <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                     </div>
                  </form>
				 
               </div>
            </div>
			
         </div>
      </div>
   </body>
</html>