<?php
	$root = "http://localhost/m3/html";
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
			
	  		<?php include('inc/nav.php'); ?>
	        

	        <div class="scroller">
	            <div class="scroller-inner">
						<a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a>
						
						<div class="page-content">
							<h1>Page Title</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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