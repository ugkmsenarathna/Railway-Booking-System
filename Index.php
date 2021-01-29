<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login/Register</title>
 
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>

 <h3></h3>
  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><h2>Admin Login</h2></h3>
                </div>

                    <div class="panel-body">
					  
                        <form action="loginhandle.php" method="post">
						
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" class="form-control" placeholder="NIC No" required name="un">
                            </div>
							
							
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" required name="pw">
                            </div>
							
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"> Log in</button>
                            </div>
							
                        </form>
                    </div>
            </div>
        </div>                     
        </div>
    </div>  
    </div> 




</body>
</html>

