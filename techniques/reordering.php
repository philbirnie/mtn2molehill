<?php 
	$pageClass = "reordering";
	$nextURL = "/techniques/lazy-load-1";
	$prevURL = "/solution/concatenation";
	include('../inc/header.php');
?>
	<h1>Re-ordering Page Assets</h1>

	<h2>What does it do?</h2>
	<p>By loading non-essential elements last or asynchronously and ensuring the correct ordering of things, and ensuring that they don't interfere with the page load, we can make it look like our page is loading faster.</p>

	<h2>What does this address?</h2>
	<ul>
		<li>Illusions - Make the page look like it's loading faster</li>
	</ul>

	<h2>Implementation</h2>
	<ul>
		<li>Move all non-required assets to the bottom of the page, just before the closing <code>&lt;/body&gt;</code> tag.</li>
		<li><strong>Future:</strong> Use <code>async</code> and <code>defer</code> tags depending upon order dependency</li>
	</ul>

<pre>
&lt;script src="jquery-min.js" defer&gt;&lt;/script&gt;
&lt;script src="main.min.js" defer&gt;&lt;/script&gt;
&lt;script src="idontneedjquery.js" async&gt;&lt;/script&gt;
</pre>

	<h3>Create Ways to load JS</h3>
	<p><a href="http://www.html5rocks.com/en/tutorials/speed/script-loading/">Deep dive into the murky waters of script loading - Jake Archibald</a></p>


	<h2>Testing</h2>
	<p>Analyze HAR file/Waterfall Chart to see when DOM is loaded and if rendering is blocked</p>
<?php include('../inc/footer.php'); ?>