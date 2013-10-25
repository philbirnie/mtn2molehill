<?php 
	$pageClass = "demo";
	$nextURL = "";
	$prevURL = "";
	include('../inc/header-lltest.php');
?>
	<h1>Lazy Loading Images</h1>

	<h2>Before</h2>

	<p>The "mobile first" philosophy leads us to start with all styles in a base stylesheet and then override these styles with media queries.  This results in loading one extra image</p>

	<h2>After</h2>

	<p>By putting <strong>all</strong> background images that will be swapped into media queries, we reduce 
	our number of requests and bandwidth on some mobile devices. <strong>Desktop browsers are generally smarter!</strong></p>

	<div id="image-holder">
	<!-- Div with Background Image -->
	</div>



<?php include('../inc/footer.php'); ?>