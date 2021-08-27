<!DOCTYPE html>
<html lang="zxx">
    <head>
       @include('frontendview.common.head')
    </head>
    <body class="home5">
        <!--Preloader area start here-->
        @include('frontendview.common.preloader')
		<!--Preloader area end here-->
		
        <!--Full width header Start-->
        <div class="full-width-header">
            <!-- Toolbar Start -->
            @include('frontendview.common.toolbar')
            <!-- Toolbar End -->
            
            <!--Header Start-->
            @include('frontendview.common.header')
            <!--Header End-->
        
        </div>
        <!--Full width header End-->
		
		<!-- Content Starts here -->
        @yield('content')
		<!-- Content Ends here -->
       
        <!-- Footer Start -->
        @include('frontendview.common.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
		
		<!-- Canvas Menu start -->
        @include('frontendview.common.canvas-menu-nav')
        <!-- Canvas Menu end -->
        
        <!-- Search Modal Start -->
        @include('frontendview.common.search-modal')
        <!-- Search Modal End --> 
        
        @include('frontendview.common.scripts')
    </body>
</html>