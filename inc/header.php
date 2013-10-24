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
		<div class="mp-pusher" id="mp-pusher">	
			<?php include('nav.php'); ?>
			<div class="scroller">
	            <div class="scroller-inner">
						<a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a>
						<div class="page-content <?php if(isset($pageClass)){ echo $pageClass; } ?>">