<?php 
	$pageClass = "demo";
	$nextURL = "";
	$prevURL = "";
	include('../inc/concatenate-header-bottom.php');
?>
	<h1>Position of Scripts</h1>

	<h2>Before</h2>

	<p>Browser has to wait until after scripts are loaded before continuing to render page in case something in the script actually changes the way the page will be rendered.</p>

	<h2>After</h2>

	<p>None of the page's content is blocked by our scripts because we load them last. </p>

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


<?php include('../inc/concatenate-footer-bottom.php'); ?>