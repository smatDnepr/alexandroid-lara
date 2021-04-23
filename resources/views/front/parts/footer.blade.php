<footer>
	<div class="inner">

		<div class="group-1">
			<div class="social">
				@include('front.parts.footer-contacts')
			</div>
			<div class="logo">
				<a href="{{ route('front.index') }}">
					<svg class="ico"><use xlink:href="{{ asset('assets/img/logo-1.svg#Layer_1') }}"></use></svg>
				</a>
			</div>
			<div class="copyright">© 2017-{{ date("Y") }}. {{ __('Все права защищены') }}</div>
		</div>

		<div class="group-2">

			<div class="menu">
				<div class="title">{{ __('Портфолио') }}:</div>
				@include('front.parts.footer-genres')
			</div>

			<div class="menu">
				<div class="title">{{ __('Справки') }}:</div>
				<ul>
					<li><a href="{{ route('front.politika') }}"><span>{{ __('Политика конфиденциальности') }}</span></a></li>
					<li><a href="#" class="js-btn-popup-contact"><span>{{ __('Связаться') }}</span></a></li>
				</ul>
			</div>

		</div>

	</div>
</footer>