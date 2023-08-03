<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SEO Meta Tags -->
    
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	
    <!-- Website Title -->
    <title>Food Detection</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="http://localhost/face-mask-website/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/face-mask-website/css/swiper.css" rel="stylesheet">
	<link href="http://localhost/face-mask-website/css/magnific-popup.css" rel="stylesheet">
	<link href="http://localhost/face-mask-website/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
</head>
<body background="http://localhost/background71.jpg">
<form action="/welcome/" method="post">
{% csrf_token %}
</form>
<br>
<div class="tab-content" id="lenoTabsContent">

	<!-- Tab -->
	<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
		<div class="container">
			<form action="/external?id={{data_welcome}}{{id}}" method="post">
					{% csrf_token %}
			<div class="row">
				<div class="upload-btn-wrapper">
					<button class="btn"><i class="far fa-file-image"></i>UPLOAD FILE</button>
					<input type="file" name="myfile" id="picture" required></input>
				</div>
			</div> <!-- end of row -->
			<div id="converted-image1">
			</div> <!-- end of row -->
			<div class="row">
				<div class="upload-btn-wrapper">
					<button class="btn" id="submit-image">DETECT FOOD</button>
				</div>
			</div> <!-- end of row -->
			</form>
		</div> <!-- end of container -->
	</div> <!-- end of tab-pane -->
	<!-- end of tab -->
	</form>

	<!-- Tab -->		
</div>
<br>
<center><h3 style="color: black;">{{data_external}}{{data1}}</h3></center>
    <!-- Scripts -->
    <script src="http://localhost/face-mask-website/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="http://localhost/face-mask-website/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="http://localhost/face-mask-website/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="http://localhost/face-mask-website/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="http://localhost/face-mask-website/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="http://localhost/face-mask-website/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="http://localhost/face-mask-website/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="http://localhost/face-mask-website/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
