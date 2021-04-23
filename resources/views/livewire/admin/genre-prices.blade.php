<div>

    <div class="card-body items-list sortable-list price-list p-0 livevire-component-card-body" data-suffix="genre_prices">
		@foreach ($prices as $index => $price)
			{{-- {{dump($price)}} --}}
			<div class="item price-item sortable-item" data-id="{{ $price->id }}">
				<form wire:submit.prevent="updateItem({{ $index }}, {{ $price->id }})" class="form-price-item">
					<div class="row">
						<div class="col-sm-5">
							<div class="form-group">
								<label>{{ __('Заголовок прайса') }}</label>
								<input type="text" class="form-control @error('title.' . $index) is-invalid @enderror" wire:model.defer="title.{{ $index }}" />
								@error('title.' . $index)
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group">
								<label>{{ __('Деньги') }} *</label>
								<input type="text" class="form-control @error('money.' . $index) is-invalid @enderror" wire:model.defer="money.{{ $index }}" />
								@error('money.' . $index)
									<p class="invalid-feedback">{{ $message }}</p>
								@enderror
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label>{{ __('Описание прайса') }} *</label>
								<textarea class="form-control @error('description.' . $index) is-invalid @enderror" wire:model.defer="description.{{ $index }}" style="min-height:124px;"></textarea>
								@error('description.' . $index)
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
									<button type="button" class="btn btn-sm btn-danger" onclick="confirm('{{ __('Подтверди удаление!') }}') || event.stopImmediatePropagation()" wire:click.prevent="deleteItem({{ $price->id }})">
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
        <button type="button" class="btn btn-primary" wire:click="addItem()">{{ __('Добавить прайс') }}</button>
    </div>
	
</div>
