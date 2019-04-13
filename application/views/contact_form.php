<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="./data/css/header-carousel.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	
	/* Carousel Fading slide */
.carousel-fade .carousel-inner { }
.carousel-fade .carousel-control { z-index: 2; }  
.carousel-fade .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
  }
  
  .carousel-fade .next.left,
  .carousel-fade .prev.right,
  .carousel-fade .item.active { opacity: 1; }

  .carousel-fade .active.left,
  .carousel-fade .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
    }


/* Safari Fix */
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}

/* Carousel Control custom */
.carousel-control .control-icon {
  font-size: 48px;
  height: 30px;
  margin-top: -15px;
  width: 30px;
  display: inline-block;
  position: absolute;
  top: 50%;
  z-index: 5;
  }
  .carousel-control .prev { margin-left:  -15px;  left: 50%; } /* Prev */
  .carousel-control .next { margin-right: -15px; right: 50%; } /* Next */


/* Removing BS background */
.carousel .control-box { opacity: 0; }
a.carousel-control.left  { left: 0; background: none; border: 0;}
a.carousel-control.right { right: 0; background: none; border: 0;}


/* Animation */
.control-box, a.carousel-control, .carousel-indicators li {
  -webkit-transition: all 2s ease;
  -moz-transition: all 2s ease;
  -ms-transition: all 2s ease;
  -o-transition: all 2s ease;
  transition: all 2s ease;   
  /* hardware acceleration causes Bootstrap carousel controlbox margin error in webkit */
  /* Assigning animation to indicator li will make slides flicker */
  } 


/* Hover animation */
.carousel:hover .control-box { opacity: 1; }
.carousel:hover a.carousel-control.left { left: 15px; }
.carousel:hover a.carousel-control.right { right: 15px; }  


/* Carouse Indicator */
.carousel-indicators li.active,
.carousel-indicators li { border: 0; }

.carousel-indicators li {
  background: #666;
  margin: 0 3px;
  width: 12px;
  height: 12px;
  }

.carousel-indicators li.active {
  background: #fff;
  margin: 0 3px;
  }

/* Delete this 
------------------------------------------------ */
footer.info { text-align: center; color: #888; margin: 30px 0; }
footer.info p { color: white; }
	
	</style>
</head>
<body>

<div id="container">
	<h1>The Core by MDF Productions</h1>
	
	<section class="main-slider">
	  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	
	
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
	    </ol>
	
	
	    <!-- Carousel items -->
	    <div class="carousel-inner">
	
	      <!-- Slide 1 : Active -->
	      <div class="item active">
	        <img src="https://cl.ly/image/3J45082V2c1L/banner_01.jpg" alt="">
	        <div class="carousel-caption">
	          <h3>Slide 1</h3>
	          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	        </div><!-- /.carousel-caption -->
	      </div><!-- /Slide1 -->
	
	      <!-- Slide 2 -->
	      <div class="item ">
	        <img src="https://cl.ly/image/2J0z1t033B25/banner_02.jpg" alt="">
	        <div class="carousel-caption">
	          <h3>Slide 2</h3>
	          <p>Etiam porta sem malesuada magna mollis euismod.</p>
	        </div><!-- /.carousel-caption -->
	      </div><!-- /Slide2 -->
	
	      <!-- Slide 3 -->
	      <div class="item ">
	        <img src="https://cl.ly/image/1a3i3k0F3B3h/banner_03.jpg" alt="">
	        <div class="carousel-caption">
	          <h3>Slide 3</h3>
	          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	        </div><!-- /.carousel-caption -->
	      </div><!-- /Slide3 -->
	
	      <!-- Slide 4 -->
	      <div class="item ">
	        <img src="https://cl.ly/image/1n0A2k0Z111n/banner_04.jpg" alt="">
	        <div class="carousel-caption">
	          <h3>Slide 4</h3>
	          <p>Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
	        </div><!-- /.carousel-caption -->
	      </div><!-- /Slide4 -->
	
	    </div><!-- /.carousel-inner -->
	
	
	    <!-- Controls -->
	    <div class="control-box">
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div><!-- /.control-box -->
	
	
	  </div><!-- /#myCarousel -->
	</section><!-- /.main-slider -->

	<div id="body">
		<p>Contact</p>
		<?php 
		// Open form and set URL for submit form
		echo form_open("mdfProdMailController/doMail");
		
		// Show Name Field in View Page
		echo form_label('User Name :', 'u_name');
		$data= array(
		'name' => 'u_name',
		'placeholder' => 'Please Enter User Name',
		'class' => 'input_box'
		);
		echo form_input($data);
		
		// Show Email Field in View Page
		echo form_label('User email:', 'u_email');
		$data= array(
		'type' => 'email',
		'name' => 'u_email',
		'placeholder' => 'Please Enter Email Address',
		'class' => 'input_box'
		);
		echo form_input($data);
		?>
		</div>
		
		// Show Update Field in View Page
		<div id="form_button">
		<?php
		$data = array(
		'type' => 'submit',
		'value'=> 'Submit',
		'class'=> 'submit'
		);
		echo form_submit($data); ?>
		</div>
		
		// Close Form
		<?php echo form_close();?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
	
	<script src="./data/js/carousel.js"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<script>
	// Carousel Auto-Cycle
	  $(document).ready(function() {
	    $('.carousel').carousel({
	      interval: 3000
	    })
	  });
		
	</script>
	
</body>
</html>