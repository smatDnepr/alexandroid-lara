@extends('admin.layout')

@section('title')
	<small>Google Analytics</small>
@endsection

@section('content')
	<section class="content">
		<form action="{{route('admin.google-analytics.update')}}" method="post" autocomplete="off">
			@csrf
			<div class="card mb-0">
				<div class="card-body mb-0 livevire-component-card-body-v2">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>{{ __('Код в теге') }} HEAD</label>
								<textarea name="code_head" class="form-control @error('code_head') is-invalid @enderror" style="min-height:300px;">{{ $googleAnalytic->code_head }}</textarea>
								@error('code_head')
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>{{ __('Код в теге') }} BODY</label>
								<textarea name="code_body" class="form-control @error('code_body') is-invalid @enderror" style="min-height:300px;">{{ $googleAnalytic->code_body }}</textarea>
								@error('code_body')
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group mt-1">
								<label>{{ __('Включено') }}&nbsp;&nbsp;</label>
								<input type="checkbox"
										name="enabled"
										style="width:20px; height:20px; vertical-align:middle;"
										@if ($googleAnalytic->enabled)
											checked
										@endif
								/>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">{{ __('Сохранить') }}</button>
				</div>
			</div>
		</form>
	</section>
@endsection