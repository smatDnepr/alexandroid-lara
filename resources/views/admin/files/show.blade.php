@extends('admin.layout')

{{-- @section('title', 'Файлы') --}}

@section('content')
	<section class="content">
		<div class="card card-primary card-filemanager">
			<iframe src="/vendor/filemanager/dialog.php?type=0" frameborder="0"></iframe>
		</div>
	</section>
@endsection