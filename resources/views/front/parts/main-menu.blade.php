<ul>
	<li class="active">
		<a href="{{ route('front.index') }}"><span>{{ __('Главная') }}</span></a>
	</li>
	<li>
		<a href="
		@if (Route::currentRouteName() == 'front.index')
			#section_about
		@else
			{{ route('front.index') }}#section_about
		@endif">
			<span>{{ __('Обо мне') }}</span>
		</a>
	</li>
	<li>
		<a href="#section_some_work"><span>{{ __('Поработаем?') }}</span></a>
	</li>
	<li>
		<a href="#section_portfolio"><span>{{ __('Портфолио') }}</span></a>
	</li>
	<li>
		<a href="#" class="js-btn-popup-contact"><span>{{ __('Связаться') }}</span></a>
	</li>
</ul>