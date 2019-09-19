<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>The Core by MDF Productions</title>

	<link rel="icon" href="./data/img/Header-Logo.png">
	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" type="text/css" />

	<!-- Header Carousel -->
	<link type="text/css" rel="stylesheet" href="data/css/header-carousel.css" />
	
	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="data/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="data/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="data/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="data/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="data/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=634445106966703&autoLogAppEvents=1"></script>
	
	<!-- Facebook chat -->
	<?php include("facebook_chat.php");?>
	<!-- /Facebook chat -->	
	
	<!-- Navigation Area -->
	<?php include("nav_area.php");?>
	<!-- /Navigation Area -->
	
	<!-- Home -->
	<?php include("home.php");?>
	<!-- /Home -->

	<!-- About -->
	<?php include("about.php");?>
	<!-- /About -->

	<!-- Services and Pricing -->
	<?php include("services/service-main.php");?>
	<!-- /Services and Pricing -->
	
	<!-- Link -->
	<?php include("link.php");?>
	<!-- /Link -->
	
    <!-- Gallery -->
	<?php include("gallery.php");?>
	<!-- /Gallery -->

	<!-- Team -->
	<?php include("team.php");?>
	<!-- /Team -->]
	
	<!-- News -->
	<?php include("news.php");?>
	<!-- /News -->
	

	
	<!-- Contact -->
	<?php include("contact.php");?>
	<!-- /Contact -->
	
	<div id="copyright" class="container">
		<ul class="links">
			<li>Website by &copy;HORIAN. All rights reserved.</li>
		</ul>
	</div>

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- 	<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"   integrity="sha256-xI/qyl9vpwWFOXz7+x/9WkG5j/SVnSw21viy8fWwbeE="   crossorigin="anonymous"></script> -->
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<!-- 	<script type="text/javascript" src="data/js/jquery.min.js"></script> -->
<!-- 	<script type="text/javascript" src="data/js/bootstrap.min.js"></script> -->
<!-- 	<script type="text/javascript" src="data/js/carousel.js"></script> -->
	<script type="text/javascript" src="data/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="data/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="data/js/particles.js"></script>
	<script type="text/javascript" src="data/js/main.js"></script>
	<script type="text/javascript" src="data/js/form.js"></script>
	<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
	<script type="text/javascript">
	
	$(function () {
		  $("#datepicker").datepicker({ 
			  	startDate: '-0d',
			    changeMonth: true,
		        autoclose: true, 
		        todayHighlight: true
		  }).datepicker('update', new Date());

		  $("#spacerental-datepicker").datepicker({ 
			  	startDate: '-0d',
			    changeMonth: true,
		        autoclose: true, 
		        todayHighlight: true
		  }).datepicker('update', new Date());
	});
		
	</script>
	
</body>

</html>
