@extends('admin.layout')

@section('title')
	<small>{{__('Мои партнеры')}} </small>
@endsection

@section('content')
	@livewire('admin.partner')
@endsection