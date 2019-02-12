<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>register</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="This is a default index page for a new domain."/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
    <h1>Register Form</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="register2.php" method="post">
                    <div class="form-group">
                        <label for="email">Name:</label>
        		        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
				    </div>
				    <div class="form-group">
				        <label for="pwd">Address:</label>
				        <textarea class="form-control" id="address" name="address" cols="5" rows="3"> </textarea>
				    </div>
				    <div class="form-group">
				      <label for="pwd">Gender:</label>

				        <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
						<label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>

				    </div>
				    <div class="form-group">
    			        <label for="email">User Name:</label>
				        <input type="text" class="form-control" id="username" placeholder="Enter User Name" name="username">
				    </div>
				    <div class="form-group">
    			        <label for="email">Password</label>
				        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
				    </div>
				    <div class="form-group">
    			        <label for="email">Phone:</label>
				        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
				    </div>
				    <div class="form-group">
    			        <label for="email">Email:</label>
				        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
				    </div>
				    <!--div class="form-group">
    			        <label for="email">:</label>
				        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
				    </div-->
				    <div class="form-group">
				      <div class="col-sm-offset-2 col-sm-10">
				        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				      </div>
				    </div>
				</form>
    		</div>

    	</div>
    </div>
</body>

</html>
