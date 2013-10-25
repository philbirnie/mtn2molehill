<?php 
	$pageClass = "concatenation";
	$nextURL = "/techniques/reordering";
	$prevURL = "/techniques/mod_deflate";
	include('../inc/header.php');
?>
	<h1>Concatenation</h1>

	<blockquote>
		&#8220;The biggest impact on end-user response times is the number of components in the page.&#8221;
		<cite>Tenni Theurer</cite>
	</blockquote>

	<h2>What does it do?</h2>
	<p>By Concatenating our CSS, Javascript files, and using image sprites, we are reducing the number of calls to the server thereby reducing latency.</p>

	<p>By concatenating our scripts and files, we can easily reduce our number of page requests by 50% or more.</p>

	<h2>What does this address?</h2>
	<ul>
		<li>Reduces Latency</li>
	</ul>

	<h2>Parallel Downloads</h2>
	<ul>
		<li>Most browsers can handle up to <strong>six</strong> downloads per host at once</li>
		<li>Use CDNs to download from multiple hosts (Microsoft's CDN for popular libraries, Amazon S3 or Cloudfront)</li>
		<li><a href="http://www.browserscope.org/?category=network" title="Home -
Browserscope">Browserscope</a></li>
	</ul>

	<h2>Caveats</h2>
	<ul>
		<li>Get as close to six as possible</li>
	</ul>

	<h2>Implementation</h2>

	<p>Concatenation requires an interrogation of your workflow, careful planning and organization</p>

	<h3>CSS</h3>

	<ul>
		<li>Break apart CSS files to breakpoints</li>
		<li>Use LESS or SASS to bind the files together and then tie them together</li>
		<li>A pre-processor such as CodeKit to facilitate</li>
	</ul>

	<p>Example:</p>
	<pre>
//smallest.less

@import '../../../default/css/less/mixins/lesshat.less';
@import '../../../default/css/less/mixins/grid.less';
@import '../../../default/css/less/mixins/adept.less';
@import 'config.less';


//Smallest Styles
//GO HERE
// 
h1
{
     font-size: 1.6rem;
     margin-bottom: 2.2rem;
}

&#8230;

/*=========================================================================== */
/* Media Queries
/*=========================================================================== */


// Mobile (Landscape) ~ 480px
@media screen and (min-width: 480px){
     @import 'main.480.less';
}
// Tablet (Portrait) ~ 768px
@media screen and (min-width: 768px) {
     @import 'main.768.less';
}
// Desktop
@media screen and (min-width: 1025px){
     @import 'main.1024.less';
}

</pre>

	<h3>Sprites <small>(concatenating images)</small></h3>
	<p>Use background positioning to display different images from one file instead of loading multiple images (latency nightmare!)

	<p><strong>Example:</strong> <a href="http://s.c.lnkd.licdn.com/scds/common/u/img/sprite/sprite_global_v8.png" title="LinkedIn Sprite">LinkedIn</a></p>

	<h3>Javascript</h3>

	<ul>
		<li>Like with CSS, combine multiple Javascript files into one file</li>
		<li><strong>No one right way</strong></li>
		<li><strong>Idea:</strong>
			<ul>
				<li>Keep all core files used on most or all pages in one folder, then concatenate these</li>
				<li>Load scripts for sections or related pages together.</li>
			</ul>
		</li>
	</ul>

	<h3>Inlining Javascript</h3>
	<p>For small scripts that are only used on a single page or a couple of pages, these should be inlined into the page itself.  You can even do this with CSS.  To keep things manageable between two pages, you could use php <code>require</code> or <code>include</code> statements.</p>

	<p><a href="http://stackoverflow.com/questions/138884/when-should-i-use-inline-vs-external-javascript">An old rule broken!</a></p>

	<h2>Testing</h2>
	<p>Use HAR file/Waterfall chart to compare number of requests.</p>
<?php include('../inc/footer.php'); ?>