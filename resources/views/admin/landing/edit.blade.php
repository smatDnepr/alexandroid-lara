@extends('admin.layout')

@section('title')
	<small>{{ __('Главная') }} {{ __('страница') }}</small>
@endsection

@section('content')
	<section class="content">
		<div class="card card-primary card-landing card-outline card-outline-tabs mb-0">

			<div class="card-header p-0 border-bottom-0">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="pill" href="#landing-tab-params">
							{{ __('Параметры') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#landing-tab-promo-slides">
							{{ __('Промо-слайдер') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#landing-tab-about">
							{{ __('Обо мне') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#landing-tab-info-slider">
							{{ __('Инфо-слайдер') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#landing-tab-portfolios">
							{{ __('Портфолио') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#landing-tab-final-info">
							{{ __('Финальный блок') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#landing-tab-seo-meta">
							SEO Meta Tags
						</a>
					</li>
				</ul>
			</div>

			<div class="card-body p-0 mb-0">
				<div class="tab-content">
					<div class="tab-pane fade active show" id="landing-tab-params">
						@livewire('admin.landing-params')
					</div>

					<div class="tab-pane fade" id="landing-tab-promo-slides">
						@livewire('admin.landing-promo-slides')
					</div>

					<div class="tab-pane fade" id="landing-tab-about">
						@livewire('admin.landing-about')
					</div>

					<div class="tab-pane fade" id="landing-tab-info-slider">
						<ul class="nav nav-tabs pl-3 pt-3 pr-3" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="pill" href="#landing-tab-info-slider-title" role="tab" aria-selected="true">{{ __('Общие данные') }}</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="pill" href="#landing-tab-info-slider-slides" role="tab" aria-selected="false">{{ __('Слайды') }}</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="landing-tab-info-slider-title" role="tabpanel">
								@livewire('admin.landing-info-slider-common')
							</div>
							<div class="tab-pane fade" id="landing-tab-info-slider-slides" role="tabpanel">
								@livewire('admin.landing-info-slider-slides')
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="landing-tab-portfolios">
						@livewire('admin.landing-portfolios')
					</div>

					<div class="tab-pane fade" id="landing-tab-final-info">
						@livewire('admin.landing-final-info')
					</div>

					<div class="tab-pane fade" id="landing-tab-seo-meta">
						@livewire('admin.landing-seo-meta')
					</div>

				</div>
			</div>

		</div>
	</section>
@endsection