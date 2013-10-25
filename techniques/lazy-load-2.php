<?php 
	$pageClass = "lazy-load-2";
	$nextURL = "/conclusions/on-the-horizon";
	$prevURL = "/techniques/lazy-load-1";
	include('../inc/header.php');
?>
	<h1>Lazy Loading Part 2<br>
		<span class="subhead">Use Javascript to load JS elements &amp; Related, Stylesheets</span>
	</h1>

	<h2>What does it do?</h2>
	<p>Load Javascript, CSS and Markup only after all elements are loaded - and only at particular screen sizes.</p>

	<h2>What does this address?</h2>
	<ul>
		<li>Reduce Latency</li>
		<li>Reduce Bandwidth</li>
		<li>Making Page Appear to Load Faster</li>
	</ul>

	<h2>Implementation</h2>
	<ul>
		<li><a href="https://github.com/sparkbox/mediaCheck" title="MediaCheck Plugin">MediaCheck Plugin</a></li>
		<li><a href="<?php echo $root; ?>/techniques/jcarousel-example">jCarousel</a> as an example</li>
	</ul>

	<pre>
mediaCheck({
	media: '(max-width: 420px)',
		entry: function() {
			initializeSmall();
		},
		exit: function() {
			initializeLarge();
		}
	});
</pre>

	<h2>Testing</h2>
	<p>Analyze HAR file/Waterfall Chart for bandwidth usage, number of files loaded, and point at which DOM is loaded</p>
<?php include('../inc/footer.php'); ?>