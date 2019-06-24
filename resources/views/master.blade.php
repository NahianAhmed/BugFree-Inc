<!DOCTYPE html>
<html>

@include('components/header')

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="body">


        @include('components/nav')

        <div role="main" class="main">

          @yield('contain')

        </div>

        @include('components/footer1')

    </div>

    <!-- Vendor -->
    <script src="{{asset('public/asset/theme')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/popper/umd/popper.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/common/common.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/vide/jquery.vide.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('public/asset/theme')}}/js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('public/asset/theme')}}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset('public/asset/theme')}}/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Theme Custom -->
    <script src="{{asset('public/asset/theme')}}/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('public/asset/theme')}}/js/theme.init.js"></script>

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
