@extends('front.layouts.layout')

@section('page-content')
	<h1 style="position: absolute; top: -100000px;">{{ $headerH1 }}</h1>

	<section id="section_slider_promo" class="section-slider-promo">
		<div class="inner">
			<div class="slider">
				<div class="list">
					@foreach ($promoSlides as $slide)
						<div class="item">
							<div class="content">
								<div class="title">{{$slide->title}}</div>
								<div class="text">{{$slide->text}}</div>
								<div class="bottom">
									@if ($slide->btn_functional == 1)
										<a class="btn-primary" href="{{$slide->btn_link}}">
											<span>{{ __('Портфолио') }}</span>
										</a>
									@else
										<a class="btn-primary js-btn-popup-contact" href="#">
											<span>{{ __('Связаться') }}</span>
										</a>
									@endif
								</div>
							</div>
							<div class="background" style="background-image: url('{{$slide->img}}');" data-bgr="{{$slide->img}}"></div>
						</div>
					@endforeach
				</div>
				<div class="nav-left">
					<div class="preview">
						<div class="thumbnail"></div>
						<div class="title"></div>
					</div>
					<div class="btn-slider-promo-nav"></div>
				</div>
				<div class="nav-right">
					<div class="preview">
						<div class="thumbnail"></div>
						<div class="title"></div>
					</div>
					<div class="btn-slider-promo-nav"></div>
				</div>
				<a class="btn-top-bottom" data-rel="section_about">
					<svg class="ico"><use xlink:href="assets/img/ico-arrow-top-bottom.svg#Layer_1"></use></svg>
				</a>
			</div>
		</div>
	</section>

	<section id="section_about" class="section-about" style="background-image:url('{{ $about->background }}');">
		<div class="inner">
			<div class="content">
				<figure class="figure">
					<img class="img" src="{{$about->picture}}" alt="">
				</figure>
				<div class="info">
					<div>{!! $about->text !!}</div>
					<div class="tel">{{ $contact->phone }}</div>
				</div>
			</div>
		</div>
	</section>

	<section id="section_some_work" class="section-some-work">
		<div class="inner">
			<div class="header">
				<h2>{{ $infoSliderCommon->title }}</h2>
				<div class="subtitle">
					{!! nl2br($infoSliderCommon->subtitle) !!}
				</div>
			</div>
			<div class="slider-toggler">
				@foreach ($infoSliderSlides as $infoSlide)
					<button class="toggler">
						<svg class="ico"><use xlink:href="{{ $infoSlide->img }}#Layer_1"></use></svg>
					</button>
				@endforeach
			</div>
			<div class="slider-content">
				<ul>
					@foreach ($infoSliderSlides as $infoSlide)
						<li>
							<svg class="ico"><use xlink:href="{{ $infoSlide->img }}#Layer_1"></use></svg>
							<div class="title">{{ $infoSlide->title }}</div>
							<div class="text">{!! nl2br($infoSlide->text) !!}</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</section>

	<section id="section_portfolio" class="section-portfolio">
		<div class="inner">
			<div class="header">
				<h2>{{ __('Портфолио') }}</h2>
			</div>
			<div class="content">
				<div class="list">
					@foreach ($portfolios as $item)
						@php
							$title   = $item->portfolio->title;
							$date    = $item->portfolio->date;
							$partner = $item->portfolio->partner ? $item->portfolio->partner->title : '';
							$images  = $item->portfolio->images;
							$thumb   = getThumb600($item->portfolio->images[0]->img);
						@endphp
						<div class="item" data-thumbnail="{{ $thumb }}" data-caption="{{ $title }}" data-partner="{{ $partner }}" data-date="{{ $date }}">
							@foreach ($images as $image)
								<a href="{{ $image->img }}"></a>
							@endforeach
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

	<section id="section_partners" class="section-partners">
		<div class="inner">
			<div class="header">
				<h2>{{ __('Партнеры') }}</h2>
			</div>
			<div class="content">
				<div class="list">
					@foreach ($partners as $partner)
						<div class="item">
							@if ( ! empty($partner->link) )
								<a href="{{ $partner->link }}" target="_blank">
									<img src="{{ $partner->logo }}" alt="{{ $partner->title }}" title="{{ $partner->title }}">
								</a>
							@else
								<a href="javascript:;" style="cursor: default; opacity: 1 !important;">
									<img src="{{ $partner->logo }}" alt="{{ $partner->title }}" title="{{ $partner->title }}">
								</a>
							@endif
						</div>
					@endforeach
				</div>
				<button class="btn-slide-prev">
					<svg class="ico"><use xlink:href="{{ asset('assets/img/ico-arrow-left_12x24.svg#Layer_1') }}"></use></svg>
				</button>
				<button class="btn-slide-next">
					<svg class="ico"><use xlink:href="{{ asset('assets/img/ico-arrow-right_12x24.svg#Layer_1') }}"></use></svg>
				</button>
			</div>
		</div>
	</section>

	<section id="section_contact" class="section-contact">
		<div class="inner">
			<div class="header">
				<h2 class="h2">{{ $finalInfo->title }}</h2>
			</div>
			<div class="content">
				{!! $finalInfo->text !!}
			</div>
			<div class="bottom">
				<a class="btn-primary js-btn-popup-contact" target="_blank" href="#">
					<span>{{ __('Связаться') }}</span>
				</a>
			</div>
		</div>
	</section>
@endsection