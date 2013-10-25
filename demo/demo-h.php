<?php 
	$pageClass = "demo";
	$nextURL = "";
	$prevURL = "";
	include('../inc/header.php');
?>
	<h1>Gzip Demo</h1>

	<h2>Before</h2>

	<p>Before we enable Gzipping, our CSS file was approximately 14KB and our page was approximately 4.5 KB</p>

	<h2>After</h2>

	<p>After enabling Gzipping, the transfer size of our CSS file dropped to 3KB and our page dropped to less than 2 KB!</p>

	<p><img src="<?php echo $root; ?>/img/mountain.jpg" alt="" /></p>
	

<?php include('../inc/footer.php'); ?>