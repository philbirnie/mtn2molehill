<?php 
	$pageClass = "demo";
	$nextURL = "";
	$prevURL = "";
	include('../inc/final-header.php');
?>
	<h1>Lazy Loading</h1>

	<h2>Before</h2>

	<p>All assets, regardless of whether or not Javascript is active or jCarousel is used are loaded into the browser.</p>

	<h2>After</h2>

	<p>Almost all assets that we are loading are used in some way.</p>

	<h2>jCarousel Example</h2>
	<div id="jcarousel-container">
		<img id="holder-image" src="<?php echo $root; ?>/img/jcarousel/img1.jpg" alt="">
	</div>


<?php include('../inc/final-footer.php'); ?>