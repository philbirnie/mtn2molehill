<?php 
	$pageClass = "lazy-load-1";
	$nextURL = "techniques/lazy-load-2";
	$prevURL = "solution/reordering";
	include('../inc/header.php');
?>
	<h1>Lazy Loading Part 1 - Media Queries and Image Loading</h1>

	<h2>What does it do?</h2>
	<p>We specify different background images (optimized for the size of device that we are using) using media queries. This allows us to only load the images we need - so often in responsive design background images are either <b>a)</b> much too large for the device size or <b>b)</b> overwritten and never used! </p>

	<h2>What does this address?</h2>
	<ul>
		<li>Reduce Latency</li>
		<li>Reduce Bandwidth</li>
	</ul>

	<h2>Implementation</h2>
	<ul>
		<li>Move all Background images into Media Queries</li>
		<li>Browsers are smart!</li>
	</ul>

<pre>
#image-holder
{
     width: 100%;
     min-height: 400px;
     background-color: #aaa;
     background-repeat: no-repeat;
     background-position: 50% 50%;
}

@media screen and (max-width: 480px)
{
     /** Will not load unless screen size is less than 480 */
     #image-holder
     {
          background-image: url('../images/molehill.jpg');
     }
}


@media screen and (min-width: 481px) {
/** Will not load unless screen size is at least 481. Will it load this at 1024? Surprisingly, no.  */

    #image-holder
    {
         background-image: url('../images/hill.jpg');
    }
}

@media screen and (min-width: 1024px) {
/** Will not load unless screen size is at least 1024. */
    #image-holder
    {
         background-image: url('../images/mountain.jpg');
    }
}
</pre>

	<h2>Testing</h2>
	<p>Analyze HAR file/Waterfall Chart for bandwidth usage and number of files loaded</p>
<?php include('../inc/footer.php'); ?>