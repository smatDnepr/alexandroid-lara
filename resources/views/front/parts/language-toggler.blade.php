<ul class="menu-lang">
	<li>
		<a href="">
			<span class="{{ LaravelLocalization::getCurrentLocale() }}">
				{{ LaravelLocalization::getCurrentLocale() }}
			</span>
		</a>
		<ul class="sub-menu">
			@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
				@if ($localeCode !== LaravelLocalization::getCurrentLocale())
					<li>
						@if (Route::currentRouteName() == 'front.genre')
							<a href="{{ LaravelLocalization::getLocalizedURL($localeCode, 'genre/' . $slugTranslations[$localeCode]) }}" hreflang="{{ $localeCode }}" lang="{{ $localeCode }}">
								<span class="{{ $localeCode }}">
									{{ $localeCode }}
								</span>
							</a>
						@else
							<a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" hreflang="{{ $localeCode }}" lang="{{ $localeCode }}">
								<span class="{{ $localeCode }}">
									{{ $localeCode }}
								</span>
							</a>
						@endif
					</li>
				@endif
			@endforeach
		</ul>
	</li>
</ul>