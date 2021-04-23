<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	{{-- <ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="{{ route('front.index') }}" class="nav-link" target="_blank">На сайт</a>
		</li>
	</ul> --}}

	<ul class="navbar-nav language">
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<span class="{{ LaravelLocalization::getCurrentLocale() }}">
					{{ LaravelLocalization::getCurrentLocaleNative() }}
				</span>
			</a>
			<div class="dropdown-menu dropdown-menu-left">
				@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
					<a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
						<span class="{{ $localeCode }}">
							{{ $properties['native'] }}
						</span>
					</a>
					@if (! $loop->last)
						<div class="dropdown-divider"></div>
					@endif
				@endforeach
			</div>
		</li>
	</ul>

	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
	</ul>
</nav>
