<?php 
	$pageClass = "latency";
	$nextURL = "/solution/bandwidth";
	$prevURL = "/solution/prelude";
	include('../inc/header.php');
?>
	<h1>Latency</h1>

	<p><strong>Latency is the <a href="http://www.igvita.com/2012/07/19/latency-the-new-web-performance-bottleneck/" title="Latency the new Bottleneck">most important</a> thing we can address</strong>. This requires minimizing the number of requests on any given page.</p>

	<h2>What is Latency?</h2>

	<p><strong>Latency</strong> is the amount of time between when a browser makes a request and the server actually beings sending data.</p>

	<p>Latency varies depending upon connection and device.  Mobile networks have notoriously high latency.</p>

	<h2>Typical Latency Benchmarks</h2>

	<dl><dt>Good Wired Connection</dt> <dd>10-30 ms</dd></dl>
	<dl><dt>Good Wifi Connection</dt> <dd>30-60 ms</dd></dl>
	<dl><dt>Good 4G Connection</dt> <dd>150-250 ms</dd></dl>
	<dl><dt>Good 3G Connection</dt> <dd>400 ms</dd></dl>
	<dl><dt>Poor Connection</dt> <dd>&#8776; 1000-2000ms!</dd></dl>
	
	<p>If your phone has been idle, there may be an addition of 1000-2000ms while the phone reconnects.</p>

<?php include('../inc/footer.php'); ?>