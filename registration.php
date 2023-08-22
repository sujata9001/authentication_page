<!DOCTYPE html>
<html>
<head>
	<title>Authentication page</title>
	<!-- <link rel="stylesheet" type="text/css" href=""> -->
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="text-center"><b>Login Page</b></h2><br><br>
				<form action="login.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Enter username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter password">
					</div>
					<button type="submit" class="btn btn-primary" name="login">Login</button>
				</form>
			</div>
		    <div class="col-lg-6">
				<h2 class="text-center"><b>Signup Page</b></h2><br><br>
				<form action="signup.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Enter username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter password">
					</div>
					<div class="form-group">
						<label>Confirm password</label>
						<input type="password" name="conpassword" class="form-control" placeholder="Enter confirm password">
					</div>
					<button type="submit" class="btn btn-success" name="signup">Signup</button>
				</form>
			</div>
		</div>
	</div>
 
				
			
</body>
</html>