<div>
    <form wire:submit.prevent="saveLandingParams">
		<div class="card-body livevire-component-card-body">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>{{ __('Заголовок H1') }}</label>
						<input type="text" wire:model.defer="title" class="form-control @error('title') is-invalid @enderror" />
						@error('title')
							<p class="invalid-feedback">{{ $message }}</p>
						@enderror
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">{{__('Сохранить')}} {{__('параметры')}}</button>
		</div>
	</form>
</div>
