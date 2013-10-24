<?php 
	$pageClass = "caching";
	$nextURL = "techniques/concatenation";
	$prevURL = "solution/caching";
	include('../inc/header.php');
?>
	<h1>Mod_Deflate or Mod_Gzip</h1>

	<h2>What does it do?</h2>
	<p>Apache Modules that compress content before sending it to the browser.  Modern browsers read these gzipped headers and then decompress the content.</p>

	<h2>What does this address?</h2>
	<ul>
		<li>Reduces Bandwidth</li>
	</ul>

	<h2>Caveats</h2>
	<ul>
		<li>Increases Work on Server</li>
		<li>Most effective on Text Assets</li>
		<li>Poor performance on small assets &lt; 1000 bytes</li>
	</ul>

	<h2>Implementation</h2>
	<h6>(Example for Apache)</h6>

	<p>Make sure that mod_deflate.c or mod_gzip.c is installed and active</p>

	<pre>
AddOutputFilterByType DEFLATE text/html text/plain text/css application/json
AddOutputFilterByType DEFLATE application/javascript
AddOutputFilterByType DEFLATE text/xml application/xml text/x-component
AddOutputFilterByType DEFLATE application/xhtml+xml application/rss+xml application/atom+xml
AddOutputFilterByType DEFLATE image/svg+xml application/vnd.ms-fontobject application/x-font-ttf font/opentype
	</pre>

	<h2>Testing</h2>

	<p>Browser or <a href="http://www.whatsmyip.org/http-compression-test/" title="WhatsMyIP.org | HTTP Compression Test">Compression Tester</a></p>
	</pre>



<?php include('../inc/footer.php'); ?>