						</div><!-- .page-content -->
	            </div><!-- /scroller-inner -->
				<div class="pagination">
					<?php if(isset($prevURL)){ ?><a href="<?php echo $prevURL; ?>" class="prev">Previous</a><?php } ?>
					<?php if(isset($nextURL)){ ?><a href="<?php echo $nextURL; ?>" class="next">Next</a><?php } ?>
				</div><!-- .pagination -->
			</div><!-- .scroller -->
		</div><!-- .pusher -->
	</div><!-- .container -->
	<script src="<?php echo $root; ?>/js/classie.js"></script>
	<script src="<?php echo $root; ?>/js/pushmenu.js"></script>
	<script>
		new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	</script>
</body>