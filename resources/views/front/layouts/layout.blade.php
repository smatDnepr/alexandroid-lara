<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	{!! SEO::generate() !!}
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.css') }}">
	@if ( isset($googleAnalytic) )
		{!! $googleAnalytic->code_head !!}
	@endif
</head>

<body>
	@if ( isset($googleAnalytic) )
		{!! $googleAnalytic->code_body !!}
	@endif

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

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/slick/slick.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/slick/slick.js') }}"></script> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/jqueryScrollbar/jquery.scrollbar.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jqueryScrollbar/jquery.scrollbar.js') }}"></script> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.css" integrity="sha512-xlddSVZtsRE3eIgHezgaKXDhUrdkIZGMeAFrvlpkK0k5Udv19fTPmZFdQapBJnKZyAQtlr3WXEM3Lf4tsrHvSA==" crossorigin="anonymous"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js" integrity="sha512-5AcaBUUUU/lxSEeEcruOIghqABnXF8TWqdIDXBZ2SNEtrTGvD408W/ShtKZf0JNjQUfOiRBJP+yHk6Ab2eFw3Q==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/svg4everybody/2.1.9/svg4everybody.min.js"></script>

    {{-- <script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha512-HaoDYc3PGduguBWOSToNc0AWGHBi2Y432Ssp3wNIdlOzrunCtB2qq6FrhtPbo+PlbvRbyi86dr5VQx61eg/daQ==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.smatEqualItemsHeight.js') }}"></script>

    {{-- <script type="text/javascript" src="{{ asset('assets/js/jquery.maskedinput-1.4.1.min.js') }}"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('assets/js/gsap3/gsap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/gsap3/ScrollTrigger.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/animate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
