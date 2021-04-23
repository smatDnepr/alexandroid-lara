<div>
    <form wire:submit.prevent="saveGenreParams">
		<div class="card-body livevire-component-card-body">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>{{ __('Название') }}</label>
						<input type="text" wire:model.defer="title" class="form-control @error('title') is-invalid @enderror" />
						@error('title')
							<p class="invalid-feedback">{{ $message }}</p>
						@enderror
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Slug</label>
						<input type="text" wire:model.defer="slug" class="form-control @error('slug') is-invalid @enderror" />
						@error('slug')
							<p class="invalid-feedback">{{ $message }}</p>
						@enderror
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group mt-1">
						<label>{{ __('Опубликован на сайте') }}&nbsp;&nbsp;</label>
						<input type="checkbox" wire:model.defer="is_published" style="width:20px; height:20px; vertical-align:middle;" />
					</div>
				</div>
			</div>
		</div>
		
		<div class="card-footer">
			<a class="btn btn-outline-primary" href="{{ route('admin.genres.index') }}">{{ __('К списку жанров') }}</a>
			<button type="submit" class="btn btn-primary">{{__('Сохранить')}} {{__('Параметры жанра')}}</button>
		</div>
	</form>
</div>
