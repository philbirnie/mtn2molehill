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
							<h1>The Advantages of Responsive Design</h1>

							<h3>Goal of Responsive Design</h3>
							<p> To seamlessly deliver content, using a single HTML document to a variety of devices and browsers.</p>

							<h5>Advantages</h5>
							<ul>
								<li>Single design</li>
								<li>Single URL</li>
								<li>Single platform or CMS</li>
								<li>Generally easier to maintain content/design once launched.</li>
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