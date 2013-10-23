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
							<h1>Mobile Obstacles</h1>

							<p>When utilizing a good connection on a broadband or Wifi network, we can get away with these issues.</p>

							<h3>Challenges with Mobile Networks</h3>
							<ol>
								<li>Latency</li>
								<li>Connection Speed</li>
								<li>Interface Challenges</li>
							</ol>
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