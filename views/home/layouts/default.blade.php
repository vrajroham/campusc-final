<!DOCTYPE html>
<html>
@include('home.includes.head')
	<body class="loading-overlay-showing" data-loading-overlay>
	<div class="loading-overlay">
		<div class="loader"></div>
	</div>
		<div class="body">
			@include("home.includes.navigation")

			<div role="main" class="main">
				@include("home.includes.slider")

				@include("home.includes.section")
				
				<div class="container">
				
					<div class="row center">
						<div class="col-md-12">
							<h1 class="mb-sm word-rotator-title">
								Porto is
								<strong class="inverted">
									<span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
										<span class="word-rotate-items">
											<span>incredibly</span>
											<span>especially</span>
											<span>extremely</span>
										</span>
									</span>
								</strong>
								beautiful and fully responsive.
							</h1>
							<p class="lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
							</p>
						</div>
					</div>
				</div>
				
				<div class="home-concept">
					<div class="container">
				
						<div class="row center">
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image appear-animation" data-appear-animation="bounceIn">
									<img src="{{url('assets')}}/img/home-concept-item-1.png" alt="" />
									<strong>Strategy</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="200">
									<img src="{{url('assets')}}/img/home-concept-item-2.png" alt="" />
									<strong>Planning</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="400">
									<img src="{{url('assets')}}/img/home-concept-item-3.png" alt="" />
									<strong>Build</strong>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div id="fcSlideshow" class="fc-slideshow">
										<ul class="fc-slides">
											<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="{{url('assets')}}/img/projects/project-home-1.jpg" alt="" /></a></li>
											<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="{{url('assets')}}/img/projects/project-home-2.jpg" alt="" /></a></li>
											<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="{{url('assets')}}/img/projects/project-home-3.jpg" alt="" /></a></li>
										</ul>
									</div>
									<strong class="our-work">Our Work</strong>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container">

					<div class="row">
						<hr class="tall">
					</div>
				</div>

				@include("home.includes.features-customers")
				
				@include("home.includes.blog-customersays")

			</div>

			@include('home.includes.footer')
		</div>
	@include("home.includes.signin-modal")
		<!-- Vendor -->
		<script src="{{url('assets')}}/vendor/jquery/jquery.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="{{url('assets')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="{{url('assets')}}/vendor/common/common.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="{{url('assets')}}/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="{{url('assets')}}/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="{{url('assets')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="{{url('assets')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="{{url('assets')}}/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{url('assets')}}/js/theme.js"></script>

		
		<!-- Current Page Vendor and Views -->
		<script src="{{url('assets')}}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="{{url('assets')}}/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="{{url('assets')}}/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="{{url('assets')}}/js/views/view.home.js"></script>



		<!-- Theme Custom -->
		<script src="{{url('assets')}}/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{url('assets')}}/js/theme.init.js"></script>
	<!-- Examples -->
	<script src="{{url('assets')}}/js/examples/examples.portfolio.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>