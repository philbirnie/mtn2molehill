<?php 
	$pageClass = "our-problem";
	$nextURL = "/introduction/mobile-obstacles.php";
	$prevURL = "/introduction/the-responsive-advantage.php";
	include('../inc/header.php');
?>
	<h1>Our Problem</h1>

	<p>The responsive <em>design process</em> results in the design being heavier than a non-responsive or mobile-separate site would be.</p>

	<h3>Why are Responsively Designed Sites Inherently Heavier?</h3>
	<ul>
		<li>We resort to <code>display:none</code>in our media queries to hide things we don't need</li>
		<li>Almost never using optimally sized images for the screen size</li>
		<li>We load extra scripts, stylesheets, and elements that we may not need.</li>
	</ul>
<?php include('../inc/footer.php'); ?>