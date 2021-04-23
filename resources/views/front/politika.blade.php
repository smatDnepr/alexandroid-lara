@extends('front.layouts.layout')

@section('page-content')
	<section class="section-article">
		<div class="inner">
			<div class="header">
				<h1>{{ $politika->title }}</h1>
			</div>
			<div class="content">
				<div class="article">
					{!! $politika->text !!}
				</div>
			</div>
		</div>
	</section>
@endsection