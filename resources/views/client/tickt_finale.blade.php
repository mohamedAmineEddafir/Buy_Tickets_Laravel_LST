<!DOCTYPE html>
<html lang="en">
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .ticket-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: 300px;
            background-color: #fff;
            margin-left: 31%
        }
        .ticket-container img {
            width: 100%;
            height: auto;
        }
        .ticket-content {
            padding: 20px;
        }
        .ticket-content h2 {
            font-size: 18px;
            margin-bottom: 10px;
            text-align: center;
        }
        .ticket-content p {
            margin: 5px 0;
            color: #666;
            text-align: center;
        }
        .ticket-info {
            margin-top: 10px;
            font-size: 16px;
        }
        .ticket-right {
            padding: 20px;
            text-align: center;
        }
        .ticket-right h3 {
            margin: 0 0 20px;
            font-size: 18px;
            text-align: center;
        }
        .ticket-right p {
            margin: 10px 0;
            color: #333;
            text-align: center;
        }
        .ticket-right img {
            width: 100px;
            height: 100px;
        }
        .powered-by {
            margin-top: 20px;
            color: #999;
            font-size: 12px;
        }
        .spane{
          text-align: center;
        }
    </style>
</head>
<body>
    <div class="ticket-container">
        <img src="{{ public_path('images/' . $event->image) }}" alt="">
        <div class="ticket-content">
            <h2>{{ $event->event_name }}</h2>
            <p> {{ $event->date }} , {{ $event->time }} AM. ,  {{ $event->duration }} h</p>
            <p>{{ $event->firstName }} {{ $event->lastName }}</p>
            <div class="ticket-info">
                <p style="color: #000000"> 1 x Ticket</p><br>
                <p style="color: #000000"> Total : {{ $event->price }} Dhs</p>
            </div>
        </div>
        <div class="ticket-right">
            <h3>{{ $event->venue }}</h3>
            <img src="https://via.placeholder.com/100" alt="QR Code">
            <p class="powered-by">Powered by Barren</p>
        </div>
    </div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <title>Barren - Simple Online Event Ticketing System</title>
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/night-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
</head>
<body class="d-flex flex-column h-100">
    <div class="invoice clearfix">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8 col-md-10">
                    <div class="invoice-header justify-content-between">
                        <div class="invoice-header-logo">
                            <img src="/assets/images/dark-logo.svg" alt="invoice-logo">
                        </div>
                        <div class="invoice-header-text">
                            <a href="#" class="download-link">Download</a>
                        </div>
                    </div>
                    <div class="invoice-body">
                        <div class="invoice_dts">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="invoice_title">Invoice</h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="vhls140">
                                        <ul>
                                            <li><div class="vdt-list">Invoice to <b>{{ $event->firstName }} {{ $event->lastName }}</b></div></li>
                                            <li><div class="vdt-list">Date : <b>{{ $event->date }}</b></div></li>
                                            <li><div class="vdt-list">Localisation : <b>{{ $event->venue }}</b></div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-table bt_40">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Event Details</th>
                                            <th scope="col">Localisation</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $event->id }}</td>
                                            <td><a href="#" target="_blank">{{ $event->event_name }}</a></td>
                                            <td>{{ $event->venue }}</td>
                                            <td>1</td>
                                            <td>{{ $event->price }} Dhs</td>
                                            <td>{{ $event->price }} Dhs</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1"></td>
                                            <td colspan="5">
                                                <div class="user_dt_trans text-end pe-xl-4">
                                                    <div class="totalinv2">Invoice Total : {{ $event->price }} Dhs</div>
                                                    <p>Paid via Paypal</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice_footer">
                            <div class="cut-line">
                                <i class="fa-solid fa-scissors"></i>
                            </div>
                            <div class="main-card">
                                <div class="row g-0">
                                    <div class="col-lg-7">
                                        <div class="event-order-dt p-4">
                                            <div class="event-thumbnail-img">
                                                <img src="{{ asset('images/' . $event->image) }}" alt="">
                                            </div>
                                            <div class="event-order-dt-content">
                                                <h5>{{ $event->event_name }}</h5>
                                                <span>{{ $event->venue }}, {{ $event->date }}, {{ $event->time }} AM. Duration 1h</span>
                                                <div class="buyer-name">John Doe</div>
                                                <div class="booking-total-tickets">
                                                    <i class="fa-solid fa-ticket rotate-icon"></i>
                                                    <span class="booking-count-tickets mx-2">1</span>x General Admission
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket_footer mt-4">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="ticket_validity">
                                                        Valid on 10 Oct 2022 - 10 Oct 2023
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-end">
                                                    <div class="booking-total-grand">
                                                        Total : <span>{{ $event->price }} Dhs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="QR-dt p-4">
                                            <ul class="QR-counter-type">
                                                <li>{{ $event->venue }}</li>
                                            </ul>
											<div class="QR-scanner">
												<img src="{{ 'data:image/png;base64,' . $codeQR }}" alt="QR Code">
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice_footer_note">
                                <p>Thank you for your purchase.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-steps.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>

