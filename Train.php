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
            <div class="panel panel-primary">
               <div class="panel-heading">Add New Train</div>
               <div class="panel-body">
				
				 <form action="Train_handle.php" method="post">
                     <div class="form-group">
                        <label for="usr">Train ID:</label>
                        <input type="text" class="form-control" name="tid">
                     </div>
                     <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" name="name">
                     </div>
                     <div class="form-group">
                        <label for="usr">No of seats:</label>
                        <input type="text" class="form-control" name="nos">
                     </div>
                     
                     <div class=col-md-2>
                        <button type="submit" class="btn btn-info">Save</button>
                     </div>
				 </form>
         </div>
		 </div>
		 </div>
		 
         <div class=col-md-3>
		      <h3></h3>
             <div class="panel panel-default">
               <div class="panel-heading">Search Train</div>
               <div class="panel-body">
                  <form action="Search_train.php" method="post">
                     <div class="form-group">
                        <label for="usr">Train ID:</label>
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text" class="form-control" name="tid">
                           </div>
                           <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
			<br/>
			 <div class="panel panel-default">
               <div class="panel-heading">Update/ Delete Train</div>
               <div class="panel-body">
                  <form action="Edit_train.php" method="post">
                     <div class="form-group">
                        <label for="usr">Train ID:</label>
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text" class="form-control" name="tid">
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