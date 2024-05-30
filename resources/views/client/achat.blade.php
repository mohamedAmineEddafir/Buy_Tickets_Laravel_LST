@extends('client_layout.master')

@section('content')
<div class="event-dt-block p-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="main-title checkout-title">
                    <h3>Order Confirmation</h3>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="checkout-block">
                    <div class="main-card">
                        <div class="bp-title">
                            <h4>Billing information</h4>
                        </div>
                        <div class="bp-content bp-form">
                            <form action="{{ route('achat.achat') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">First Name*</label>
                                        <input class="form-control h_50" type="text" name="firstName" placeholder="" >																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Last Name*</label>
                                        <input class="form-control h_50" type="text" name="lastName" placeholder="" >																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Email*</label>
                                        <input class="form-control h_50" type="text"  name="email" placeholder=""  >																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Address*</label>
                                        <input class="form-control h_50" type="text" name="address" placeholder="" value="">																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group main-form mt-4">
                                        <label class="form-label">Country*</label>
                                        <select class="selectpicker" name="country" data-size="5" title="Nothing selected" data-live-search="true">
                                            <option value="Maroc">Maroc</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria (Österreich)</option>
                                            <option value="Belgium">Belgium (België)</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>                                            
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Vietnam">Vietnam</option>																					
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">City</label>
                                        <input class="form-control h_50" name="city" type="text" placeholder="" value="">																								
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="main-card mt-5">
                        <div class="bp-title">
                            <h4>Total Payable Amount : AUD $50.00</h4>
                        </div>
                        <div class="bp-content bp-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Card number*</label>
                                        <input class="form-control h_50" type="text" placeholder="" value="">
                                        {{-- name="cardNumber" --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Expiry date*</label>
                                        <input class="form-control h_50"  type="text" placeholder="MM/YY" value="">
                                         {{-- name="expiryDate" --}}																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">CVV*</label>
                                        <input class="form-control h_50" type="text" placeholder="" value="">	
                                         {{-- name="cvv" --}}										
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button class="main-btn btn-hover h_50 w-100 mt-5" type="submit">Confirm & Pay</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="main-card order-summary">
                    <div class="bp-title">
                        <h4>Billing information</h4>
                    </div>
                    <div class="order-summary-content p_30">
                        <div class="event-order-dt">
                            <div class="event-thumbnail-img">
                                <img src="{{asset('assets/images/event-imgs/img-7.jpg')}}" alt="">
                            </div>
                            <div class="event-order-dt-content">
                                <h5>Tutorial on Canvas Painting for Beginners</h5>
                                <span>Wed, Jun 01, 2022 5:30 AM</span>
                                <div class="category-type">Online Event</div>
                            </div>
                        </div>
                        <div class="order-total-block">
                            <div class="order-total-dt">
                                <div class="order-text">Total Ticket</div>
                                <div class="order-number">1</div>
                            </div>
                            <div class="order-total-dt">
                                <div class="order-text">Sub Total</div>
                                <div class="order-number">$50.00</div>
                            </div>
                            <div class="divider-line"></div>
                            <div class="order-total-dt">
                                <div class="order-text">Total</div>
                                <div class="order-number ttl-clr">AUD $50.00</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection