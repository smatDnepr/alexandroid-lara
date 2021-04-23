@extends('admin.layout')

@section('title')
	<small>{{__('Редактировать портфолио')}} </small> &ldquo;{{ $portfolio->title }}&rdquo;
@endsection

{{-- {{ dd( $portfolio ) }} --}}

@section('content')
	<section class="content">
		<form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="post">
			@csrf
			@method('put')
			<div class="card card-portfolios m-0">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>{{ __('Название') }}</label>
										<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $portfolio->title }}" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>Slug</label>
										<input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ $portfolio->slug }}" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>{{ __('Жанр') }}</label>
										<select class="form-control" name="genre_id">
											<option value="0">{{ __('Без жанра') }}</option>
											@foreach($genres as $genre)
												<option value="{{ $genre->id }}" @if ($genre->id == $portfolio->genre_id) selected  @endif>{{ $genre->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>{{ __('Партнер') }}</label>
										<input type="text" name="partner_title" class="form-control @error('partner_title') is-invalid @enderror" value="{{ $portfolio->partner_title }}" />

										{{-- <select class="form-control" name="partner_id">
											<option value="0">{{ __('Без партнера') }}</option>
											@foreach($partners as $partner)
												<option value="{{ $partner->id }}" @if ($partner->id == $portfolio->partner_id) selected  @endif>{{ $partner->title }}</option>
											@endforeach
										</select> --}}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>{{ __('Дата съемки') }}</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="far fa-calendar-alt"></i>
												</span>
											</div>
											<input type="text" name="date" class="form-control datepicker" value="{{ $portfolio->date }}" autocomplete="off" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>{{ __('Фотографии.') }} <span style="font-weight: normal">{{ __('Главная - это первая в списке. Можно перетаскивать и менять местами.') }}</span></label>
										<div class="img-list">
											<input id="images_hidden_input" type="hidden" name="images" value="{{ json_encode($portfolio->images->pluck('img'), JSON_UNESCAPED_SLASHES) }}" />
											<figure class="template figure">
												<span class="del" onclick="javascript:;" title="{{ __('Удалить') }}"><i class="fas fa-times-circle"></i></span>
												<a class="link" href="#" target="_blank" title="{{ __('Открыть в новом окне') }}" >
													<img class="img" src="" />
												</a>
											</figure>
											@foreach ( $portfolio->images as $image )
												<figure class="figure" data-img="{{ $image->img }}">
													<span class="del" onclick="javascript:;" title="{{ __('Удалить') }}"><i class="fas fa-times-circle"></i></span>
													<a class="link" href="{{ $image->img }}" target="_blank" title="{{ __('Открыть в новом окне') }}" >
														<img class="img" src="{{ str_replace('/uploads/source/', '/uploads/thumbs/', $image->img) }}" />
													</a>
												</figure>
											@endforeach
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#rfm_modal">{{ __('Добавить') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<a class="btn btn-outline-primary" href="{{ route('admin.portfolios.index') }}">{{ __('К списку портфолио') }}</a>
					<button type="submit" class="btn btn-primary">{{ __('Сохранить') }}</button>
				</div>
			</div>
		</form>
	</section>

	<div class="modal fade" id="rfm_modal" tabindex="-1" role="dialog" aria-labelledby="rfm_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
			<div class="modal-content">
				<iframe src="/vendor/filemanager/dialog.php?type=1&field_id=images_hidden_input" frameborder="0" width="100%" height="630"></iframe>
			</div>
		</div>
	</div>
@endsection