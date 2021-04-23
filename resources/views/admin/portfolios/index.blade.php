@extends('admin.layout')

@section('title')
	<small>{{__('Все портфолио')}} </small>
@endsection

@section('content')
	<section class="content">
		<div class="card card-portfolios mb-0">
			<div class="card-body p-0">
				<table class="table table-portfolio-list">
					<thead>
						<tr>
							<th style="width:50px">id</th>
							<th>{{ __('Название') }}</th>
							<th>Slug</th>
							<th>{{ __('Жанр') }}</th>
							<th>{{ __('Партнер') }}</th>
							<th style="white-space:nowrap">{{ __('Дата съемки') }}</th>
							<th style="width:250px">{{ __('Фотографии') }}</th>
							<th style="width:180px">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($portfolios as $portfolio)
						<tr>
							<td>
								{{ $portfolio->id }}
							</td>
							<td>
								{{ $portfolio->title }}
							</td>
							<td>
								{{ $portfolio->slug }}
							</td>
							<td>
								@isset($portfolio->genre->title)
									{{ $portfolio->genre->title }}
								@endisset
							</td>
							<td>
								@isset($portfolio->partner_title)
									{{ $portfolio->partner_title }}
								@endisset
							</td>
							<td>
								@isset($portfolio->date)
									{{ $portfolio->date }}
								@endisset
							</td>
							<td>
								<div class="img-list">
									@foreach ( $portfolio->images as $image)
										<figure class="figure">
											<a class="link" href="{{ $image->img }}" target="_blank" title="{{ __('Открыть в новом окне') }}" >
												<img class="img" src="{{ str_replace('/uploads/source/', '/uploads/thumbs/', $image->img) }}" />
											</a>
										</figure>
									@endforeach
								</div>
							</td>
							<td class="">
								<a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-info btn-sm float-left mr-1" title="{{ __('Редактировать') }}">
									<i class="fas fa-pencil-alt"></i>
									Edit
								</a>
								<form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="post" class="">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-sm btn-danger" title="{{ __('Удалить') }}" onclick="return confirm( ' {{ __('Подтвердите удаление') }} ' )">
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
				<a class="btn btn-primary" href="{{ route('admin.portfolios.create') }}">{{ __('Добавить портфолио') }}</a>
			</div>
		</div>
	</section>
@endsection