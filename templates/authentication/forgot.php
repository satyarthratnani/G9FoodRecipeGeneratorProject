<!doctype html>
<html lang="en">
  <head>
  	<title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="http://localhost/login-form/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(http://localhost/login-form/images/wallpaper.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">	
				<h2 class="heading-section">Enter Your Email-Address</h2>		
			</div>
			<br>
			<form action="http://localhost/foodsql/forgotemail.php" class="signin-form" method="post">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="Email"  pattern=".+@gmail\.com" name="email" required>
		      		</div>
					<br>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="submit">Submit</button>
					<br>
	            </div>
				<p class="w-100 text-center">&mdash; or &mdash;</p>
	          <div class="social d-flex text-center">
	          <a href="/" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Sign In</a>
			  <br>	
			  <a href="/signup" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Sign Up</a>
				<br>
	          </div>
	          <div class="social d-flex text-center">
	          </div>
		      </div>
				</div>
			</div>
			</form>
		</div>
	</section>

	<script src="http://localhost/login-form/js/jquery.min.js"></script>
  <script src="http://localhost/login-form/js/popper.js"></script>
  <script src="http://localhost/login-form/js/bootstrap.min.js"></script>
  <script src="http://localhost/login-form/js/main.js"></script>

	</body>
</html>

