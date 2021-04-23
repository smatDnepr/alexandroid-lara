<section class="content">
	<div class="card card-primary card-partners m-0">

		<div class="card-body items-list partners-list sortable-list p-0 livevire-component-card-body-v3">
			@foreach ($partners as $index => $partner)
				<div class="item partner-item sortable-item" data-id="{{ $partner->id }}">
					<form wire:key="form_partner_{{ $index }}" wire:submit.prevent="updateItem({{ $index }}, {{ $partner->id }})" class="form-partner">
						<div class="row">
							<div class="col-sm-1">
								<div class="form-group js-image-single">
									<label>{{ __('Логотип') }}</label>
									<input type="hidden" id="img_input_hidden_{{ $index }}" wire:model="logo.{{ $index }}" />
									<div class="img-wrap">
										<a class="img" href="{{ $logo[$index] }}" target="_blank">
											<img class="thumb" src="{{ $thumb[$index] }}" />
										</a>
									</div>
									<a href="#" data-toggle="modal" data-target="#rfm_img_modal_{{ $index }}">{{ __('Изменить') }}</a>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="form-group">
									<label>{{ __('Название') }}</label>
									<input type="text" class="form-control @error('title.' . $index) is-invalid @enderror" wire:model.defer="title.{{ $index }}" />
									@error( 'title.' . $index )
										<p class="invalid-feedback">{{ $message }}</p>
									@enderror
								</div>
								<div class="form-group">
									<label>{{ __('Ссылка') }}</label>
									<input type="text" class="form-control @error('link.' . $index) is-invalid @enderror" wire:model.defer="link.{{ $index }}" />
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
										<button type="button" class="btn btn-sm btn-danger" onclick="confirm('{{ __('Подтверди удаление!') }}') || event.stopImmediatePropagation()" wire:click.prevent="deleteItem({{ $partner->id }})">
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
			<button type="button" class="btn btn-primary" wire:click="addItem()">{{ __('Добавить партнера') }}</button>
		</div>

		<div class="modals-wrap">
			@foreach ($partners as $index => $partner)
				<div class="modal fade" id="rfm_img_modal_{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="rfm_modal" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<iframe src="/vendor/filemanager/dialog.php?type=1&field_id=img_input_hidden_{{ $index }}" frameborder="0" width="100%" height="630"></iframe>
						</div>
					</div>
				</div>
			@endforeach
		</div>

	</div>
</section>
