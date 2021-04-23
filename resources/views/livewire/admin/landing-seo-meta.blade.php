<div>
    <form wire:submit.prevent="save">
		<div class="card-body livevire-component-card-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group mb-4">
						<label>
							<span>Title</span>
							<small style="font-weight:normal; margin-left:5px;">({{ __('тег заголовка HTML, не больше 70 символов, включая пробелы') }})</small>
						</label>
						<input type="text" wire:model.defer="meta_title" class="form-control @error('meta_title') is-invalid @enderror" />
						@error('meta_title')
							<p class="invalid-feedback">{{ $message }}</p>
						@enderror
					</div>
					<div class="form-group mb-4">
						<label>
							<span>Description</span>
							<small style="font-weight:normal; margin-left:5px;">({{ __('метаописание, не больше 160 символов, включая пробелы') }})</small>
						</label>
						<input type="text" wire:model.defer="meta_description" class="form-control @error('meta_description') is-invalid @enderror" />
						@error('meta_description')
							<p class="invalid-feedback">{{ $message }}</p>
						@enderror
					</div>
					<div class="form-group mb-4">
						<label>
							<span>Keywords</span>
							<small style="font-weight:normal; margin-left:5px;">({{ __('ключевые слова через запятую, не больше 255 символов, включая пробелы') }})</small>
						</label>
						<input type="text" wire:model.defer="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" />
						@error('meta_keywords')
							<p class="invalid-feedback">{{ $message }}</p>
						@enderror
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">{{__('Сохранить')}} SEO-{{__('параметры')}}</button>
		</div>
	</form>
</div>
