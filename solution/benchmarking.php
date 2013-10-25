<?php 
	$pageClass = "benchmarking";
	$nextURL = "/techniques/caching";
	$prevURL = "/solution/illusions";
	include('../inc/header.php');
?>
	<h1>Measuring Progress</h1>

	<p>There are several tools out there (including walking around and actually using your mobile device on a mobile network) to test how well you are optimizing your site. Today we'll primarily use three:</p>

	<h2>Tools</h2>

	<ul>
		<li><a href="http://mobitest.akamai.com/m/index.cgi" title="Mobitest">Mobitest</a></li>
		<li>HAR files/Waterfall Diagram</li>
		<li>Our Browser's Inspector</li>
		<li>Terminal/Command Line</li>
	</ul>

	<h3>HAR File Example</h3>

	<div class="har-sample">
		
	</div>


	<h3>Command Line</h3>
	<code>curl -I http://google.com</code>

	<h2>Our Lab</h2>
	<p><a href="<?php echo $root; ?>/demo">Demo Page:</a> A fairly simple, responsively designed page with a carousel, a few libraries.</p>

<?php include('../inc/footer.php'); ?>