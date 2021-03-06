@extends('frontend.master')
@section('title', 'Contact Us')
@section('content')

<!-- Breadcrumbs Start -->
{{-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">check Out</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>check Out</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Breadcrumbs End -->

<!-- rs-check-out Here-->
<div class="rs-check-out sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="title-bg">Billing Details</h3>
                <div class="check-out-box">
                    <form id="contact-form" method="post">
                        <fieldset>
                            <div class="row">                                      
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input id="fname" name="fname" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input name="lname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row"> 
                                <div class="col-md-12 col-sm-12 col-xs-12">    
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input name="lname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input id="email" name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Phone*</label>
                                        <input name="subject" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12 col-sm-12 col-xs-12">    
                                    <div class="form-group">
                                        <label>Country*</label>
                                        <select>
                                            <option>Select Your Country</option>
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12 col-sm-12 col-xs-12">    
                                    <div class="form-group">
                                        <label>Addreess*</label>
                                        <input name="lname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12 col-sm-12 col-xs-12">    
                                    <div class="form-group">
                                        <label>Street addreess</label>
                                        <input placeholder="Apartment, suite, unit etc. (optional)"  name="lname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12 col-sm-12 col-xs-12">    
                                    <div class="form-group">
                                        <label>Town/City*</label>
                                        <input name="lname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>District*</label>
                                        <select>
                                            <option value="">Select an option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Postcode/ZIP*</label>
                                        <input name="subject" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Create an account?</label>
                            </div>    
                        </fieldset>
                    </form>	
                </div><!-- .check-out-box end -->	
                <div class="shipping-box">
                    <h3 class="title">Shipping Details</h3>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Ship to a different address</label>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12 col-sm-12 col-xs-12">    
                            <div class="form-group mb-0">
                                <label>Order Notes</label>
                                <input placeholder="Notes about your order, e.g. special notes for delivery." name="lname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div><!-- .shipping-box end -->	
            </div>
            <div class="col-lg-4 col-md-12">
                <h3 class="title-bg">Your Order</h3>
                <div class="product-demo">
                    <div class="product-image">
                        <img src="{{ url('frontend') }}/images/porder-img.png" alt="">
                    </div>
                    <div class="product-name">
                        <h5>Notebook</h5>
                    </div>
                    <div class="product-quantity">
                        <h5><i class="fa fa-times"></i>1</h5>
                    </div>
                    <div class="product-ititial-price">
                        <h5>$49.00</h5>
                    </div>
                </div><!-- .product-demo end -->
                <div class="product-price">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>$49.00</td>
                        </tr>
                        <tr>
                            <td class="no-border">Shipping</td>
                            <td class="no-border"></td>
                        </tr>
                        <tr>
                            <td> 
                                <input type="radio" name="gender" checked> Standard<br>
                                  <input type="radio"  name="gender"> Express
                              </td>
                            <td>
                                $10.00<br>
                                $19.00<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td></td>
                        </tr>
                    </table>
                </div><!-- .product-price end -->
                <div class="rs-payment-system">
                    <div class="payment-radio-btn1">
                        <input type="radio" checked>Check payments
                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                    </div>
                    <div class="payment-radio-btn2">
                          <input type="radio" name="paypal">Paypal
                      </div>
                      <input class="btn-send" type="submit" value="Order Now">
                </div><!-- .rs-payment-system end -->			
            </div>
        </div>
    </div>
</div>
<!-- rs-check-out End Here-->

@endsection

