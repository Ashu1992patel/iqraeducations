@extends('frontend.master')
@section('title', 'Student Registration')
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
                        <li>Student Registration</li>
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
        <div class="contact-comment-section">
            <h3>Student Register</h3>
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
                                <label>Date of Birth*</label>
                                <input name="dob" id="dob" class="form-control" type="date">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Preferred Course </label>
                                <select name="course" id="course" class="form-control">
                                    <option value="-1">-Select Course-</option>
                                    <option value="1">Quran with Nazira with/without Urdu Language (Live)</option>
                                    <option value="2">Urdu Language (Live)</option>
                                    <option value="3">Arabic language (Live)</option>
                                    <option value="4">Hifz e Quran (Live)</option>
                                    <option value="5">Qirat (Live)</option>
                                    <option value="6">Short Dars-e-Nizami (Live)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Guardian Name*</label>
                                <input name="guardian_name" id="guardian_name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Guardian Occupation</label>
                                <input name="guardian_occupation" id="guardian_occupation" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Contact*</label>
                                <input name="contact" id="contact" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <input name="email" id="email" class="form-control" type="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Save Details">
                    </div>                       
                </fieldset>
            </form>						
        </div>
    </div>
</div>
<!-- Contact Section End -->   

@endsection

