<?php
	$root = "http://localhost/m3/site";
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
						
						<div class="page-content cover">
							<br><br><br><br><br>
							<small>[image here]</small>
							<br><br><br><br><br>
							<h1>Making a Molehill out of a Mountain</h1>
							<h2>Optimization Techniques for Responsively-Designed Websites</h2>

							
							
						</div><!-- .page-content -->
						
						
	            </div><!-- /scroller-inner -->
				<div class="pagination">
					<a href="" class="prev">Previous</a>
					<a href="" class="next">Next</a>
				</div><!-- .pagination -->
	
	        </div><!-- /scroller -->

	    </div><!-- /pusher -->
	</div><!-- /container -->
	<script src="<?php echo $root; ?>/js/classie.js"></script>
	<script src="<?php echo $root; ?>/js/pushmenu.js"></script>
	<script>
		new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	</script>
</body>