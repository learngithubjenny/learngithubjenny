<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>EMI Calculator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="This is a default index page for a new domain."/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
    <h1>EMI Calculator</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="emical.php" method="post">
                    <div class="form-group">
                        <label for="email">Amount:</label>
        		        <input type="text" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
				    </div>
				    <div class="form-group">
    			        <label for="email">Interest Rate</label>
				        <input type="text" class="form-control" id="interest" placeholder="Enter Interest Rate" name="interest">
				    </div>
				    <div class="form-group">
    			        <label for="email">Loan Tenure(In Month):</label>
				        <input type="text" class="form-control" id="loan" placeholder="Enter Loan Tenure(In Month)" name="loan">
				    </div>
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
