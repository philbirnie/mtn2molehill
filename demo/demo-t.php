<?php 
	$pageClass = "demo";
	$nextURL = "";
	$prevURL = "";
	include('../inc/concatenate-header.php');
?>
	<h1>Concatenation Demo</h1>

	<h2>Before</h2>

	<p>Before we concatenate everything, we have 19 requests.</p>

	<h2>jCarousel Example</h2>
	<div id="jcarousel-container">
			<div class="jcarousel">
			<ul>
			<li><img src="<?php echo $root; ?>/img/jcarousel/img1.jpg"  alt=""></li>
			<li><img src="<?php echo $root; ?>/img/jcarousel/img2.jpg"  alt=""></li>
			<li><img src="<?php echo $root; ?>/img/jcarousel/img3.jpg"  alt=""></li>
			<li><img src="<?php echo $root; ?>/img/jcarousel/img4.jpg"  alt=""></li>
			<li><img src="<?php echo $root; ?>/img/jcarousel/img5.jpg"  alt=""></li>
			<li><img class="last-image" src="<?php echo $root; ?>/img/jcarousel/img6.jpg"  alt=""></li>
			</ul>
			</div>
			<p class="photo-credits">
			Photos by <a href="http://www.mw-fotografie.de">Marc Wiegelmann</a>
			</p>
			<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
			<a href="#" class="jcarousel-control-next">&rsaquo;</a>
			<p class="jcarousel-pagination">
			</p>
			</div>
	</div>


<?php include('../inc/concatenate-footer.php'); ?>