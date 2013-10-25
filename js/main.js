(function($)
{

	var initializeSmall = function()
	{

	};

	var initializeLarge = function()
	{
		var jCarouselLoaded,s,markup;

		jCarouselLoaded = false;
		//Check if jCarousel script has been loaded; if not, load it.
		if(! jCarouselLoaded)
		{
			//Create New Script Element
			s = document.createElement("script");
			s.type = "text/javascript";
			s.src = "/js/vendor/jcarousel.min.js";
			// Append Script
			$("body").append(s);


			//Add Stylesheet
			l = document.createElement("link");
			l.rel = "stylesheet";
			l.href = "/css/jcarousel.css";
			$("head").append(l);



			//Add the markup.
			markup = '<div class="jcarousel-wrapper">\
			<div class="jcarousel">\
			<ul>\
			<li><img src="/images/jcarousel/img1.jpg" width="600" height="400" alt=""></li>\
			<li><img src="/images/jcarousel/img2.jpg" width="600" height="400" alt=""></li>\
			<li><img src="/images/jcarousel/img3.jpg" width="600" height="400" alt=""></li>\
			<li><img src="/images/jcarousel/img4.jpg" width="600" height="400" alt=""></li>\
			<li><img src="/images/jcarousel/img5.jpg" width="600" height="400" alt=""></li>\
			<li><img class="last-image" src="/images/jcarousel/img6.jpg" width="600" height="400" alt=""></li>\
			</ul>\
			</div>\
			<p class="photo-credits">\
			Photos by <a href="http://www.mw-fotografie.de">Marc Wiegelmann</a>\
			</p>\
			<a href="#" class="jcarousel-control-prev">&lsaquo;</a>\
			<a href="#" class="jcarousel-control-next">&rsaquo;</a>\
			<p class="jcarousel-pagination">\
			</p>\
			</div>';

			$("#jcarousel-container").append(markup);

			//Fire Up Jcarousel
				$(".last-image").load(function()
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
			}

	};


	mediaCheck({
	media: '(max-width: 420px)',
		entry: function() {
			initializeSmall();
	},
		exit: function() {
			initializeLarge();
	}
	});
})(jQuery);
