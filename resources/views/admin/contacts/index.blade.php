@extends('admin.layout')

@section('title')
	<small>{{ __('Мои контакты') }}</small>
@endsection

@section('content')
	<section class="content">
		<form action="{{route('admin.contacts.update')}}" method="post">
			@csrf
			<div class="card mb-0">
				<div class="card-body mb-0 livevire-component-card-body-v3">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>{{ __('Телефон') }}</label>
								<input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $contacts->phone }}" />
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Telegram</label>
								<input type="text" name="telegram" class="form-control @error('telegram') is-invalid @enderror" value="{{ $contacts->telegram }}" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Viber</label>
								<input type="text" name="viber" class="form-control @error('viber') is-invalid @enderror" value="{{ $contacts->viber }}" />
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Whatsapp</label>
								<input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" value="{{ $contacts->whatsapp }}" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Facebook</label>
								<input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ $contacts->facebook }}" />
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Instagram</label>
								<input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ $contacts->instagram }}" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Flickr</label>
								<input type="text" name="flickr" class="form-control @error('flickr') is-invalid @enderror" value="{{ $contacts->flickr }}" />
							</div>
						</div>
					</div>

					<div style="height: 1px; background: #ced4da; margin: 20px 0 20px 0;"></div>

					<div class="row">
						<div class="col-sm-6">
							<label>Куда отправлять почту с заявкой:</label>
							@for ($i = 0; $i < 4; $i++)
								<div class="form-group">
									<input type="text"
											name="email_{{$i}}"
											class="form-control @error('email_'.$i) is-invalid @enderror"
											@if ($myEmails->get($i))
												value="{{ $myEmails->get($i)->email }}"
											@else
												value=""
											@endif
									/>
								</div>
							@endfor
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