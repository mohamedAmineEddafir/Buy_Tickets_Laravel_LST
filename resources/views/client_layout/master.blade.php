<!DOCTYPE html>
<html lang="en" class="h-100">
	
<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 22:51:20 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Barren - Simple Online Event Ticketing System</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{asset('frontend/images/fav.png')}}">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href='{{asset('frontend/vendor/unicons-2.0.1/css/unicons.css')}}' rel='stylesheet'>
		<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/night-mode.css')}}" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">		
		
</head>

<body class="d-flex flex-column h-100">



@include('client_layout.header')

@yield('content')

@include('client_layout.footer')

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendor/OwlCarousel/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>	
<script src="{{asset('frontend/vendor/mixitup/dist/mixitup.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/night-mode.js')}}"></script>
<script>	
    var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });
</script>
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 22:51:52 GMT -->
</html>