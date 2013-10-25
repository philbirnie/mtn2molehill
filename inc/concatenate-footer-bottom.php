						</div><!-- .page-content -->
	            </div><!-- /scroller-inner -->
			</div><!-- .scroller -->
		</div><!-- .pusher -->
	</div><!-- .container -->
	<script src="<?php echo $root; ?>/js/core.js"></script>
	<script src="//codeorigin.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="<?php echo $root; ?>/js/vendor/jcarousel.min.js"></script>
	<script>
		$(window).load(function()
		{
			$('.jcarousel').jcarousel();
			$('.jcarousel-control-prev')
			.on('active.jcarouselcontrol', function() {
				$(this).removeClass('inactive');
			})
			.on('inactive.jcarouselcontrol', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '-=1'
			});

			$('.jcarousel-control-next')
			.on('active.jcarouselcontrol', function() {
				$(this).removeClass('inactive');
			})
			.on('inactive.jcarouselcontrol', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '+=1'
			});

			$('.jcarousel-pagination')
			.on('active.jcarouselpagination', 'a', function() {
				$(this).addClass('active');
			})
			.on('inactive.jcarouselpagination', 'a', function() {
				$(this).removeClass('active');
			})
			.jcarouselPagination();
		});
		</script>
	<script>
		new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	</script>
</body>