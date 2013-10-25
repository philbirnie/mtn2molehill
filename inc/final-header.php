<?php
	$root = "http://mtn2molehill.com";
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title></title>
	<link rel="stylesheet" href="<?php echo $root; ?>/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="<?php echo $root; ?>/css/jcarousel_combined.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo $root; ?>/js/modernizr.custom.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="container">
		<div class="mp-pusher" id="mp-pusher">	
			<?php include('nav.php'); ?>
			<div class="scroller">
	            <div class="scroller-inner">
					<header class="site-header">
						<a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a>
						<div class="pagination">
							<?php if(isset($prevURL)){ ?><a href="<?php echo $root.$prevURL; ?>" class="prev">Previous</a><?php } ?>
							<?php if(isset($nextURL)){ ?><a href="<?php echo $root.$nextURL; ?>" class="next">Next</a><?php } ?>
						</div><!-- .pagination -->
					</header>
						
						<div class="page-content <?php if(isset($pageClass)){ echo $pageClass; } ?>">