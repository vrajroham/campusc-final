<!DOCTYPE html>
<html>
@include('home.includes.head')
	<body class="loading-overlay-showing" data-loading-overlay>
	<div class="loading-overlay">
		<div class="loader"></div>
	</div>
		<div class="body">
			@include("home.includes.navigation")
			@include("collegeRegistrations.includes.slider")

			@yield('college-registration-wizard')

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
	<!-- Admin Extension Specific Page Vendor -->
	<script src="{{url('assets')}}/admin/assets/vendor/jquery-validation/jquery.validate.js"></script>
	<script src="{{url('assets')}}/admin/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
	<script src="{{url('assets')}}/admin/assets/vendor/pnotify/pnotify.custom.js"></script>

	<!-- Admin Extension -->
	<script src="{{url('assets')}}/admin/assets/javascripts/theme.admin.extension.js"></script>

	<!-- Admin Extension Examples -->
	<script src="{{url('assets')}}/admin/assets/javascripts/forms/examples.wizard.js"></script>
		
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