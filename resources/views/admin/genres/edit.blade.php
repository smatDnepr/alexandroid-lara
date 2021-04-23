@extends('admin.layout')

@section('title')
	<small>{{ __('Радактирование жанра') }}</small> &ldquo;{{ $genre->title }}&rdquo;
@endsection

@section('content')
	<section class="content">
		<div class="card card-primary card-genres card-outline card-outline-tabs mb-0">

			<div class="card-header p-0 border-bottom-0">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="pill" href="#genre-tab-params">
							{{ __('Параметры жанра') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#genre-tab-promo-slides">
							{{ __('Промо-слайдер') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#genre-tab-portfolios">
							{{ __('Портфолио') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#genre-tab-prices">
							{{ __('Цены') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#genre-tab-info-slider">
							{{ __('Инфо-слайдер') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#genre-tab-description-text">
							{{ __('Описание') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#genre-tab-faq">
							{{ __('Вопросы и ответы') }}
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#genre-tab-seo-meta">
							SEO Meta Tags
						</a>
					</li>
				</ul>
			</div>

			<div class="card-body p-0 mb-0">
				<div class="tab-content">
					<div class="tab-pane fade active show" id="genre-tab-params">
						@livewire('admin.genre-params', ['genre_id' => $genre->id])
					</div>

					<div class="tab-pane fade" id="genre-tab-promo-slides">
						@livewire('admin.genre-promo-slides', ['genre_id' => $genre->id])
					</div>

					<div class="tab-pane fade" id="genre-tab-portfolios">
						@livewire('admin.genre-portfolios', ['genre_id' => $genre->id])
					</div>

					<div class="tab-pane fade" id="genre-tab-prices">
						@livewire('admin.genre-prices', ['genre_id' => $genre->id])
					</div>

					<div class="tab-pane fade" id="genre-tab-info-slider">
						<ul class="nav nav-tabs pl-3 pt-3 pr-3" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="pill" href="#genre-tab-info-slider-title" role="tab" aria-selected="true">{{ __('Общие данные') }}</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="pill" href="#genre-tab-info-slider-slides" role="tab" aria-selected="false">{{ __('Слайды') }}</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="genre-tab-info-slider-title" role="tabpanel">
								@livewire('admin.genre-info-slider-titles', ['genre_id' => $genre->id])
							</div>
							<div class="tab-pane fade" id="genre-tab-info-slider-slides" role="tabpanel">
								@livewire('admin.genre-info-slider-slides', ['genre_id' => $genre->id])
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="genre-tab-description-text">
						@livewire('admin.genre-description-text', ['genre_id' => $genre->id])
					</div>

					<div class="tab-pane fade" id="genre-tab-faq">
						@livewire('admin.genre-faq', ['genre_id' => $genre->id])
					</div>

					<div class="tab-pane fade" id="genre-tab-seo-meta">
						@livewire('admin.genre-seo-meta', ['genre_id' => $genre->id])
					</div>

				</div>
			</div>

		</div>
	</section>
@endsection