@extends('admin.layout')

@section('title')
	<small>{{__('Все жанры')}} </small>
@endsection

@section('content')
	<section class="content">
		<div class="card card-genres mb-0">
			<div class="card-body p-0">
				<table class="table">
					<thead>
						<tr>
							<th style="width:50px">id</th>
							<th>{{ __('Название жанра') }}</th>
							<th>Slug</th>
							<th style="width:300px; text-align: center;">{{ __('Опубликован на сайте') }}</th>
							<th style="width:180px">&nbsp;</th>
						</tr>
					</thead>
					<tbody class="tbody-sortable">
						@foreach ($genres as $genre)
						<tr>
							<td>
								{{ $genre->id }}
							</td>
							<td>
								{{ $genre->title }}
							</td>
							<td>
								{{ $genre->slug }}
							</td>
							<td style="text-align: center;">
								@if($genre->is_published)
									Да
								@else
									-
								@endif
							</td>
							<td>
								<a href="{{ route('admin.genres.edit', $genre->id) }}" class="btn btn-info btn-sm float-left mr-1" title="Редактировать">
									<i class="fas fa-pencil-alt"></i>
									Edit
								</a>
								<form action="{{ route('admin.genres.destroy', $genre->id) }}" method="post" class="">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-sm btn-danger" title="Удалить" onclick="return confirm('{{ __('Подтвердите удаление') }}')">
										<i class="fas fa-trash"></i>
										Delete
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="card-footer">
				<a class="btn btn-primary" href="{{ route('admin.genres.create') }}">{{ __('Добавить жанр') }}</a>
			</div>
		</div>
	</section>
@endsection