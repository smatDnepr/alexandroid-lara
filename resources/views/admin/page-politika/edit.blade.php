@extends('admin.layout')

@section('title')
	<small>{{ __('Политика конфиденциальности') }}</small>
@endsection

@section('content')
	<section class="content">
		<div class="card card-primary card-outline card-outline-tabs mb-0">
			@livewire('admin.page-politika')
		</div>
	</section>
@endsection