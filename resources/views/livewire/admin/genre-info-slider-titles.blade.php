<div>
    <div class="card-body livevire-component-card-body-v2">
		<form wire:submit.prevent="updateItem()">
			<div class="row">
				<div class="col-sm-1">
					<div class="form-group">
						<label>{{ __('Фон слайдера') }}</label>
						<input type="hidden" id="img_input_hidden__genre_info_slider_background" wire:model="background" />
						<div class="img-wrap">
							<a class="img" href="{{ $background }}" target="_blank">
								<img class="thumb" src="{{ $thumb }}" />
							</a>
						</div>
						<a href="#" data-toggle="modal" data-target="#rfm_img_modal__genre_info_slider_background">{{ __('Изменить') }}</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>{{ __('Заголовок для всего слайдера') }} *</label>
						<input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.defer="title" />
						@error('title')
							<p class="invalid-feedback">{{ $message }}</p>
						@enderror
					</div>
				</div>
				<div class="col-sm-1">
					<div class="form-group text-center">
						<label>&nbsp;</label>
						<div class="text-center" style="margin-top:3px;">
							<button type="submit" class="btn btn-sm btn-success">
								<i class="fas fa-save"></i>
								Save
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="card-footer">
		<a class="btn btn-outline-primary" href="{{ route('admin.genres.index') }}">{{ __('К списку жанров') }}</a>
	</div>
	
	
	<div class="modal fade" id="rfm_img_modal__genre_info_slider_background" tabindex="-1" role="dialog" aria-labelledby="rfm_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
			<div class="modal-content">
				<iframe src="/vendor/filemanager/dialog.php?type=1&field_id=img_input_hidden__genre_info_slider_background" frameborder="0" width="100%" height="630"></iframe>
			</div>
		</div>
	</div>
</div>



