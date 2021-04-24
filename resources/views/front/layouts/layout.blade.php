<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	{!! SEO::generate() !!}
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="overlay" onclick="javascript:;"></div>

        <button class="btn-mobile-menu"><span></span></button>

        <button class="btn-top-page">
            <svg class="ico">
                <use xlink:href="{{ asset('assets/img/ico-arrow-top_34x34.svg#Layer_1') }}"></use>
            </svg>
        </button>

        @include('front.parts.mobile-menu')

        @include('front.parts.header')

        <main>
            @yield('page-content')
        </main>

        @include('front.parts.footer')


		@include('front.popup.popup-contact')

    </div>




    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/slick/slick.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/slick/slick.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jqueryScrollbar/jquery.scrollbar.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jqueryScrollbar/jquery.scrollbar.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/svg4everybody/2.1.9/svg4everybody.min.js"></script>

    <script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.smatEqualItemsHeight.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.maskedinput-1.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/gsap3/gsap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/gsap3/ScrollTrigger.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/animate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
