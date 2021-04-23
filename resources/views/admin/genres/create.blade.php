@extends('admin.layout')

@section('content')
	<section class="content">
		<form action="{{ route('admin.genres.store') }}" method="post">
			@csrf
			@method('post')
			
			<div class="card card-primary card-genres card-outline card-outline-tabs mb-0">
				<div class="card-header p-0 border-bottom-0">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="pill" href="#genre-tab-params">
								{{ __('Параметры жанра') }}
							</a>
						</li>
					</ul>
				</div>
				
				<div class="card-body p-0 mb-0">
					<div class="tab-content">
						<div class="tab-pane fade active show" id="genre-tab-params">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>{{ __('Название') }}</label>
											<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" />
											@error('title')
												<p class="invalid-feedback">{{ $message }}</p>
											@enderror
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card-footer">
					<a class="btn btn-outline-primary" href="{{ route('admin.genres.index') }}">{{ __('К списку жанров') }}</a>
					<button type="submit" class="btn btn-primary">{{ __('Сохранить') }}</button>
				</div>
			</div>
		</form>
	</section>
@endsection