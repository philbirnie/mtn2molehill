<?php 
	$pageClass = "caching";
	$nextURL = "/techniques/mod_deflate";
	$prevURL = "/solution/benchmarking";
	include('../inc/header.php');
?>
	<h1>Enable &amp; Tune Caching</h1>

	<h2>What does it do?</h2>
	<p>We set Expiration dates on particular assets so that the browser can grab them from cache on subsequent page loads rather than retrieving them from the server.</p>

	<h2>What does this address?</h2>
	<ul>
		<li>Reduces Latency</li>
		<li>Reduces Bandwidth</li>
	</ul>

	<h2>Caveats</h2>
	<ul>
		<li>First Page Load</li>
		<li>Variable Cache Sizes</li>
	</ul>

	<h2>Implementation</h2>
	<h6>(Example for Apache)</h6>

	<p>Make sure that <code>mod_expires.c</code> is installed and active</p>

	<pre>ExpiresActive on
ExpiresDefault                          "access plus 1 month"

# Your document html
ExpiresByType text/html                 "access plus 1 hour"
 
<strong>
# Data
ExpiresByType text/xml                  "access plus 0 seconds"
ExpiresByType application/xml           "access plus 0 seconds"
ExpiresByType application/json          "access plus 0 seconds"
</strong>

# Feed
ExpiresByType application/rss+xml       "access plus 1 hour"
ExpiresByType application/atom+xml      "access plus 1 hour"


# Favicon (cannot be renamed)
ExpiresByType image/x-icon              "access plus 1 week"


# Media: images, video, audio
ExpiresByType image/gif                 "access plus 1 month"
ExpiresByType image/png                 "access plus 1 month"
ExpiresByType image/jpg                 "access plus 1 month"
ExpiresByType image/jpeg                "access plus 1 month"
ExpiresByType video/ogg                 "access plus 1 month"
ExpiresByType audio/ogg                 "access plus 1 month"
ExpiresByType video/mp4                 "access plus 1 month"
ExpiresByType video/webm                "access plus 1 month"
 
# HTC files  (css3pie)
ExpiresByType text/x-component          "access plus 1 month"
 
# Webfonts
ExpiresByType font/truetype             "access plus 1 year"
ExpiresByType font/opentype             "access plus 1 year"
ExpiresByType application/x-font-woff   "access plus 1 year"
ExpiresByType image/svg+xml             "access plus 1 year"
ExpiresByType application/vnd.ms-fontobject "access plus 1 year"
 
# CSS and JavaScript
ExpiresByType text/css                  "access plus 1 week"
ExpiresByType application/javascript    "access plus 1 month"</pre>

	<h2>Testing</h2>

	<p>Use Command Line and HAR file to test.</p>

	<pre>Philips-MacBook-Pro:~ philbirnie$ curl -I http://54.200.199.87/images/test.jpg
HTTP/1.1 200 OK
Date: Fri, 18 Oct 2013 02:33:24 GMT
Server: Apache/2.2.25 (Amazon)
Last-Modified: Fri, 18 Oct 2013 02:31:10 GMT
<strong>ETag: "20c9c-2b868-4e8faba329290"</strong>
Accept-Ranges: bytes
Content-Length: 178280
<strong>Cache-Control: max-age=2592000, public</strong>
<strong>Expires: Sun, 17 Nov 2013 02:33:24 GMT</strong>
Content-Type: image/jpeg</pre>



<?php include('../inc/footer.php'); ?>