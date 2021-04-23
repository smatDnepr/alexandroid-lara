<div>

    <div class="card-body items-list sortable-list genre-list p-0 livevire-component-card-body-v2" data-suffix="genre_info_slider_slides">
		@foreach ($slides as $index => $slide)
			<div class="item genre-item sortable-item" data-id="{{ $slide->id }}">
				<form wire:key="form_genre_slide_{{ $index }}" wire:submit.prevent="updateItem({{ $index }}, {{ $slide->id }})" class="form-genre-info-slider-slide">
					<div class="row">
						<div class="col-sm-1">
							<div class="form-group">
								<label>SVG - {{ __('иконка') }}</label>
								<input type="hidden" id="img_input_hidden__genre_info_slider_slide_{{ $index }}" wire:model="img.{{ $index }}" />
								<div class="img-wrap">
									<a class="img" href="{{ $img[$index] }}" target="_blank">
										<img class="thumb" src="{{ $img[$index] }}" />
									</a>
								</div>
								<a href="#" data-toggle="modal" data-target="#rfm_img_modal__genre_info_slider_slide_{{ $index }}">{{ __('Изменить') }}</a>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label>{{ __('Заголовок слайда') }} #{{ $slide->id }}</label>
								<input type="text" class="form-control @error('title.' . $index) is-invalid @enderror" wire:model.defer="title.{{ $index }}" />
								@error('title.' . $index)
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group">
								<label>{{ __('Текст слайда') }}</label>
								<textarea class="form-control @error('text.' . $index) is-invalid @enderror" wire:model.defer="text.{{ $index }}" rows="3"></textarea>
								@error('text.' . $index)
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group text-center">
								<label>&nbsp;</label>
								<div class="text-center">
									<button type="submit" class="btn btn-sm btn-success">
										<i class="fas fa-save"></i>
										Save
									</button>
									<button type="button" class="btn btn-sm btn-danger" onclick="confirm('{{ __('Подтверди удаление!') }}') || event.stopImmediatePropagation()" wire:click.prevent="deleteItem({{ $slide->id }})">
										<i class="fas fa-trash"></i>
										Delete
									</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		@endforeach
	</div>
	
	<div class="card-footer">
		<a class="btn btn-outline-primary" href="{{ route('admin.genres.index') }}">{{ __('К списку жанров') }}</a>
		@if ($slides->count() < 5)
			<button type="button" class="btn btn-primary" wire:click="addItem()">{{ __('Добавить слайд') }}</button>
		@endif
	</div>
	
	<div class="modals-wrap">
		@foreach ($slides as $index => $slide)
			<div class="modal fade" id="rfm_img_modal__genre_info_slider_slide_{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="rfm_modal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<iframe src="/vendor/filemanager/dialog.php?type=1&field_id=img_input_hidden__genre_info_slider_slide_{{ $index }}" frameborder="0" width="100%" height="630"></iframe>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	
</div>
