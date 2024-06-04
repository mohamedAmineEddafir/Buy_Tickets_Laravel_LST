<!DOCTYPE html>
<html lang="en" class="h-100">
	
<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 22:53:02 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Barren - Simple Online Event Ticketing System</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href="{{asset('assets/vendor/unicons-2.0.1/css/unicons.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/datepicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/jquery-steps.css')}}" rel="stylesheet">
	
	
		<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/night-mode.css')}}" rel="stylesheet">
	
		<!-- Vendor Stylesheets -->
		<link href="{{asset('assets/vendor/ckeditor5/sample/css/sample.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	
	
	
			
		
	</head>

<body class="d-flex flex-column h-100">
	<!-- Invoice Start-->
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
											<li><div class="vdt-list">Invoice to <b>{{ $event->firstName }} {{ $event->lastName }}</b> </div></li>
											{{-- <li><div class="vdt-list">140 St Kilda Rd</div></li> --}}
											<li><div class="vdt-list"> Date : <b>{{ $event->date }}</b> </div></li>
											<li><div class="vdt-list">Localisation : <b>{{ $event->venue }}</b></div></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="vhls140">
										<ul>
											{{-- <li><div class="vdt-list">Invoice ID : YCCURW-000000</div></li> --}}
											{{-- <li><div class="vdt-list">Order Date : 10/05/2022</div></li>
											<li><div class="vdt-list">Near MBD Mall,</div></li> --}}
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
											<td>{{ $event->price }}  Dhs</td>
											<td>{{ $event->price }}  Dhs</td>
										</tr>
										<tr>
											<td colspan="1"></td>
											<td colspan="5">
												<div class="user_dt_trans text-end pe-xl-4">
													<div class="totalinv2">Invoice Total : {{ $event->price }}  Dhs</div>
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
												<img src="{{asset('images/'. $event->image) }}" alt="">
											</div>
											<div class="event-order-dt-content">
												<h5>{{ $event->event_name }}</h5>
												<span>{{ $event->venue }}, {{ $event->date }},  {{ $event->time }} AM. Duration 1h</span>
												<div class="buyer-name">John Doe</div>
												<div class="booking-total-tickets">
													<i class="fa-solid fa-ticket rotate-icon"></i>
													<span class="booking-count-tickets mx-2">1</span>x Ticket
												</div>
												<div class="booking-total-grand">
													Total : <span>{{ $event->price }}  Dhs</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="QR-dt p-4">
											<ul class="QR-counter-type">
												<li>{{ $event->venue }}</li>
												{{-- <li>Counter</li>
												<li>0000000001</li> --}}
											</ul>
											<div class="QR-scanner">
												<img src="/assets/images/qr.png"  alt="QR-Ticket-Scanner">
											</div>
											<p>Powered by Barren ADYZ</p>
										</div>
									</div>
								</div>
							</div>
							<div class="cut-line">
								<i class="fa-solid fa-scissors"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Invoice End-->
	
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 22:53:02 GMT -->
</html>