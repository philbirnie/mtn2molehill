<?php
	$root = "http://localhost/presentation";
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo $root; ?>/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo $root; ?>/js/modernizr.custom.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="container">
	    <!-- Push Wrapper -->
	    <div class="mp-pusher" id="mp-pusher">
			
	  		<?php include('../inc/nav.php'); ?>
	        

	        <div class="scroller">
	            <div class="scroller-inner">
						<a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a>
						
						<div class="page-content">
							<h1>Our Problem</h1>

							<p>The responsive <em>design process</em> results in the design being heavier than a non-responsive or mobile-separate site would be.</p>

							<h3>Why are Responsively Designed Sites Inherently Heavier?</h3>
							<ul>
								<li>We resort to <code>display:none</code>in our media queries to hide things we don't need</li>
								<li>Almost never using optimally sized images for the screen size</li>
								<li>We load extra scripts, stylesheets, and elements that we may not need.</li>
							</ul>
						</div><!-- .page-content -->
						
	                </div>
	            </div><!-- /scroller-inner -->
	        </div><!-- /scroller -->

	    </div><!-- /pusher -->
	</div><!-- /container -->
	<script src="<?php echo $root; ?>/js/classie.js"></script>
	<script src="<?php echo $root; ?>/js/pushmenu.js"></script>
	<script>
		new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	</script>
</body>