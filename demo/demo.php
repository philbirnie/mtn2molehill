<?php 
	$pageClass = "demo";
	$nextURL = "";
	$prevURL = "";
	include('../inc/header.php');
?>
	<h1>Caching Demo</h1>

	<h2>Before</h2>

	<p>Before we enable caching, you will notice that requests are made to the server each time the page is loaded.</p>

	<h2>After</h2>

	<p>After caching is enabled, the browser will no longer make requests from the server, or, if refreshed will just check if the asset has changed (304).</p>

	<p><img src="<?php echo $root; ?>/img/mountain.jpg" alt="" /></p>
	

<?php include('../inc/footer.php'); ?>