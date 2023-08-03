<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<script> 

          

            // Function to check Whether both passwords 

            // is same or not. 

            function checkPassword(form) { 

                password1 = form.password.value; 

                password2 = form.confpassword.value; 

  

                // If password not entered 

                if (password1 == '') 

                    alert ("Please enter Password"); 

                      

                // If confirm password not entered 

                else if (password2 == '') 

                    alert ("Please enter confirm password"); 

                      

                // If Not same return False.     

                else if (password1 != password2) { 

                    alert ("\nPassword did not match: Please try again...") 

                    return false; 

                } 

  

                // If same return True. 

                else{ 

                     

                    return true; 

                } 

            } 

        </script> 

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="http://localhost/login-form/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(http://localhost/login-form/images/wallpaper.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					<div class="row justify-content-center">	
					<h2 class="heading-section">Sign Up</h2>		
					</div>
					<br>
		      	<form action="http://localhost/foodsql/register.php" class="signin-form" method="post" onSubmit = "return checkPassword(this)">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="name" placeholder="Username" required>
		      		</div>
					<div class="form-group">
		      			<input type="email" class="form-control" pattern=".+@gmail\.com" name="email" placeholder="Email" required>
					</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				<div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Re-Enter Password" name="confpassword" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Already a member ? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="/" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Sign In</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="http://localhost/login-form/js/jquery.min.js"></script>
  <script src="http://localhost/login-form/js/popper.js"></script>
  <script src="http://localhost/login-form/js/bootstrap.min.js"></script>
  <script src="http://localhost/login-form/js/main.js"></script>

	</body>
</html>

