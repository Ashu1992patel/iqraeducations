<header id="rs-header" class="rs-header">
    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="logo-area">
                        <a href="index.html">
                            <img src="{{ url('frontend') }}/images/logo2.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="main-menu">
                        <!-- <div id="logo-sticky" class="text-center">
                            <a href="index.html"><img src="{{ url('frontend') }}/{{ url('frontend') }}/images/logo.png" alt="logo"></a>
                        </div> -->
                        <a class="rs-menu-toggle">
                            <i class="fa fa-bars"></i>
                            Menu
                        </a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li class="{{ request()->is('welcome') ? 'current_page_item' : '' }}">
                                    <a href="{{ route('welcome') }}" class="home">Home</a>                                 
                                </li>
                                <!-- End Home --> 

                                <!--About Menu Start-->
                                <li class="{{ request()->is('about') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <!--About Menu End--> 

                                <!--Courses Menu Start-->
                                <!-- Drop Down -->
                                <li class="{{ request()->is('courses') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('courses') }}">Courses</a>
                                    <ul class="sub-menu"> 
                                        <li class="menu-item-has-children"> <a href="#">Catgeory 1</a>
                                          <ul class="sub-menu">
                                            <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                            <li> <a href="{{ route('welcome') }}">Course Two</a> </li> 
                                            <li> <a href="{{ route('welcome') }}">Course Three</a> </li>
                                          </ul>
                                        </li>                                        
                                        <li class="menu-item-has-children"> <a href="#">Catgeory 2</a>
                                          <ul class="sub-menu">
                                            <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                          </ul>
                                        </li>                                        
                                        <li class="menu-item-has-children"> <a href="#">Catgeory 3</a>
                                          <ul class="sub-menu">
                                            <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                            <li> <a href="{{ route('welcome') }}">Course Two</a> </li> 
                                            <li> <a href="{{ route('welcome') }}">Course Three</a> </li>
                                            <li> <a href="{{ route('welcome') }}">Course Four</a> </li>
                                            <li> <a href="{{ route('welcome') }}">Course Five</a> </li>
                                          </ul>
                                        </li>                                        
                                        <li class="menu-item-has-children"> <a href="#">Catgeory 4</a>
                                          <ul class="sub-menu">
                                            <li> <a href="{{ route('welcome') }}">Course One</a> </li>
                                            <li> <a href="{{ route('welcome') }}">Course Two</a> </li> 
                                          </ul>
                                        </li>                                        
                                    </ul>
                                </li>                                
                                <!--Courses Menu End-->

                                <!--Events Menu Start-->
                                <li class="{{ request()->is('teachers') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('teachers') }}">Teachers</a>
                                </li>
                                <!--Events Menu End-->

                                <!--Contact Menu Start-->
                                <li class="{{ request()->is('contact') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('contact') }}">
                                        Contact
                                    </a>
                                </li>
                                <!--Contact Menu End-->

                                <!--checkout Menu Start-->
                                <li class="{{ request()->is('checkout') ? 'current_page_item' : '' }}"> 
                                    <a href="{{ route('checkout') }}">
                                        checkout
                                    </a>
                                </li>
                                <!--checkout Menu End-->
                            </ul>
                        </nav>
                        <div class="apply-box">
                            <a href="{{ route('registration') }}" class="apply-btn">Register Now</a>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
</header>