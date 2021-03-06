@extends('frontend.master')
@section('title', 'About')
@section('content')

<!-- Breadcrumbs Start -->
{{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">About Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Breadcrumbs End -->

<!-- History Start -->
<div class="rs-history sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                <a href="#">
                    <img src="{{ url('frontend') }}/images/about/history.jpg" alt="History Image"/>
                </a>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-title">
                    <h2>OUR HISTORY</h2>
                </div>
                <div class="about-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe derit in voluptate velit esse cillum.</p>

                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot fore see the pain and trouble that are bound to belongs to who fail in their duty.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- History End -->

<!-- Mission Start -->
<div class="rs-mission sec-color sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mobile-mb-50">
                <div class="abt-title">
                    <h2>OUR MISSION</h2>
                </div>
                <div class="about-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe derit in voluptate velit esse cillum.</p>

                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, that they cannot fore see the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-6 mobile-mb-30">
                        <a href="#">
                            <img src="{{ url('frontend') }}/images/about/mission1.jpg" alt="Mission Image"/>
                        </a> 
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <img src="{{ url('frontend') }}/images/about/mission2.jpg" alt="Mission Image"/>
                        </a>                 			
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission End -->

<!-- Vision Start -->
<div class="rs-vision sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mobile-mb-50">
                <div class="vision-img rs-animation-hover">
                    <img src="{{ url('frontend') }}/images/about/vision.jpg" alt="img02"/>
                    <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
                    </a>
                    <div class="overly-border"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-title">
                    <h2>OUR VISION</h2>
                </div>
                <div class="vision-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe derit in voluptate velit esse cillum.</p>

                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot fore see the pain and trouble that are bound to ensue; and equal who fail in their duty.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vision End -->

<!-- Calltoaction Start -->
<div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
    <div class="container">
        <div class="rs-cta-inner text-center">
            <div class="sec-title mb-50 text-center">
                <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>      
                <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
            </div>
            <a class="cta-button" href="#">Join Now</a>
        </div>
    </div>
</div>
<!-- Calltoaction End -->

<!-- Team Start -->
<div id="rs-team" class="rs-team sec-spacer">
    <div class="container">
        <div class="abt-title mb-70 text-center">
            <h2>OUR EXPERIENCED STAFFS</h2>      
            <p>Considering desire as primary motivation for the generation of narratives is a useful concept.</p>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
            <div class="team-item">
                <div class="team-img">
                    <img src="{{ url('frontend') }}/images/team/1.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">ABD Rashid Khan</h3>
                        <span class="subtitle">Vice Chancellor</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.htmll">ABD Rashid Khan</a></h3>
                            <span class="team-title">Vice Chancellor</span>
                            <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            <div class="team-social">
                                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img">
                    <img src="{{ url('frontend') }}/images/team/2.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Luyes Figery</h3>
                        <span class="subtitle">A. Professor</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                            <span class="team-title">A. Professor</span>
                            <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            <div class="team-social">
                                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="team-img">
                    <img src="{{ url('frontend') }}/images/team/3.jpg" alt="team Image" />
                    <div class="normal-text">
                        <h3 class="team-name">Mr. Mahabub Alam</h3>
                        <span class="subtitle">Assistant Professor</span>
                    </div>
                </div>
                <div class="team-content">
                    <div class="overly-border"></div>
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="team-name"><a href="teachers-single.htmll">Mr. Mahabub Alam</a></h3>
                            <span class="team-title">Assistant Professor</span>
                            <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            <div class="team-social">
                                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Branches Start -->
<div id="rs-branches" class="rs-branches sec-color pt-100 pb-70">
    <div class="container">
        <div class="abt-title mb-70 text-center">
            <h2>OUR BRANCHES</h2>      
            <p>Considering desire as primary motivation for the generatio.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="branches-item">
                    <img src="{{ url('frontend') }}/images/about/australia.png" alt="Australia Flag">
                    <h3>
                        <span>01</span>
                        Australia
                    </h3>
                    <p>
                        503  Old Buffalo Street<br>
                        Northwest City #205, Australia
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="branches-item">
                    <img src="{{ url('frontend') }}/images/about/china.png" alt="China Flag">
                    <h3>
                        <span>02</span>
                        China
                    </h3>
                    <p>
                        503  Old Buffalo Street<br>
                        Northwest City #205, China
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="branches-item">
                    <img src="{{ url('frontend') }}/images/about/india.png" alt="India Flag">
                    <h3>
                        <span>03</span>
                        India
                    </h3>
                    <p>
                        503  Old Buffalo Street<br>
                        Northwest City #205, India
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="branches-item">
                    <img src="{{ url('frontend') }}/images/about/united-states.png" alt="United States Flag">
                    <h3>
                        <span>04</span>
                        United States
                    </h3>
                    <p>
                        503  Old Buffalo Street<br>
                        Northwest City #205, United States
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Branches End -->

@endsection