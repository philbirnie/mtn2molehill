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
		<li>HAR files/Waterfall Diagram in our Inspector</li>
		<li>Terminal/Command Line</li>
	</ul>

	<h3>HAR File Example</h3>

	<p>Show image of HAR file.</p>


	<h3>Command Line</h3>

	<code>curl -I http://google.com</code>

<?php include('../inc/footer.php'); ?>