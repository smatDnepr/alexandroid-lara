<header class="compensate-for-scrollbar">
	<div class="inner">
		<div class="logo">
			<a href="{{ route('front.index') }}">
				<svg class="ico"><use xlink:href="{{ asset('assets/img/logo-1.svg#Layer_1') }}"></use></svg>
			</a>
		</div>
		<div class="menu">
			@include('front.parts.main-menu')
		</div>
		<div class="contacts">
			@include('front.parts.header-contacts')
		</div>
		<div class="lang">
			@include('front.parts.language-toggler')
		</div>
	</div>
</header>