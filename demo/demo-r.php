<?php 
	$pageClass = "demo";
	$nextURL = "";
	$prevURL = "";
	include('../inc/concatenate-header-combined.php');
?>
	<h1>Concatenation Demo</h1>

	<h2>After</h2>

	<p>After concatenation, our number of requests is down to 15 + 2 moved off-server.</p>

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


<?php include('../inc/concatenate-footer-combined.php'); ?>