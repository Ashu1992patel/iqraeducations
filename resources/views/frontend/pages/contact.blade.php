@extends('frontend.master')
@section('title', 'Contact Us')
@section('content')

<!-- Breadcrumbs Start -->
{{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Cantact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="contact-page-section sec-spacer">
    <div class="container">
        <div id="googleMap"></div>
        <div class="row contact-address-section">
            <div class="col-md-4 pl-0">
                <div class="contact-info contact-address">
                    <i class="fa fa-map-marker"></i>
                    <h4>Address</h4>
                    <p>503  Old Buffalo Street</p>
                    <p>Northwest #205, New York-3087</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info contact-phone">
                    <i class="fa fa-phone"></i>
                    <h4>Phone Number</h4>
                    <a href="tel:+3453-909-6565">+3453-909-6565</a>
                    <a href="tel:+2390-875-2235">+2390-875-2235</a>
                </div>
            </div>
            <div class="col-md-4 pr-0">
                <div class="contact-info contact-email">
                    <i class="fa fa-envelope"></i>
                    <h4>Email Address</h4>
                    <a href="mailto:infoname@gmail.com"><p>infoname@gmail.com</p></a>
                    <a href="#"><p>www.yourname.com</p></a>
                </div>
            </div>
        </div>

        <div class="contact-comment-section">
            <h3>Leave Comment</h3>
            <div id="form-messages"></div>
            <form id="contact-form" method="post" action="mailer.php">
                <fieldset>
                    <div class="row">                                      
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input name="fname" id="fname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input name="lname" id="lname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <input name="email" id="email" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Subject *</label>
                                <input name="subject" id="subject" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12 col-sm-12">    
                            <div class="form-group">
                                <label>Message *</label>
                                <textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
                            </div>
                        </div>
                    </div>							        
                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Submit Now">
                    </div>                       
                </fieldset>
            </form>						
        </div>
    </div>
</div>
<!-- Contact Section End -->   

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ"></script>

@endsection

