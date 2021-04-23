@extends('front.layouts.layout')

@section('page-content')
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

	<section id="section_portfolio" class="section-portfolio">
		<div class="inner">
			<div class="header">
				<h2>{{ __('Портфолио') }}</h2>
			</div>
			<div class="content">
				<div class="list">
					@foreach ($portfolios as $item)
						@php
							$title   = $item->title;
							$date    = $item->date;
							$partner = $item->partner ? $item->partner->title : '';
							$images  = $item->images;
							$thumb   = getThumb600($item->images[0]->img);
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

	<section id="section_price" class="section-price">
		<div class="inner">
			<div class="header">
				<h2>{{ __('Цены') }}</h2>
			</div>
			<div class="content">
				<div class="items-list">
					@foreach ($prices as $price)
						<div class="item">
							<div class="title">{{ $price->title }}</div>
							<div class="content">
								<div class="center">
									<div class="text">{{ $price->description }}</div>
									<div class="money">{{ $price->money }}</div>
								</div>
								<div class="bottom">
									<a class="btn-primary js-btn-popup-contact" href="#">
										<span>{{ __('Заказать') }}</span>
									</a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

	<section id="section_some_work" class="section-some-work" style="background-image: url({{ $infoSlider->background }});">
		<div class="inner">
			<div class="header">
				<h2>{{ $infoSlider->title }}</h2>
			</div>
			<div class="slider-toggler">
				@foreach ($infoSlides as $infoSlide)
					<button class="toggler">
						<svg class="ico"><use xlink:href="{{ $infoSlide->img }}#Layer_1"></use></svg>
					</button>
				@endforeach
			</div>
			<div class="slider-content">
				<ul>
					@foreach ($infoSlides as $infoSlide)
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

	<section id="section_information" class="section-information">
		<div class="inner">
			<div class="content">
				{!! $seoText->text !!}
			</div>
		</div>
	</section>

	<section id="section_individual_calc" class="section-individual-calc">
		<div class="inner">
			<div class="content">
				<h3>{{ __('Индивидуальный подсчет стоимости') }}</h3>
				<div class="bottom">
					<a class="btn-primary js-btn-popup-contact" href="#">
						<span>{{ __('Заказать') }}</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="section_faq" class="section-faq">
		<div class="inner">
			<div class="content">
				<ul>
					@foreach ($faqs as $faq)
						<li>
							<button class="question">
								<span>{{ $faq->question }}</span>
							</button>
							<div class="answer">
								{{ $faq->answer }}
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</section>
@endsection