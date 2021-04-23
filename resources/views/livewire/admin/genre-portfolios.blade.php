<div>

    <div class="card-body livevire-component-card-body">
		<div class="row sortable-columns-wrap" data-suffix="denre_portfolios">
			<div class="card-body sortable-column">
				@foreach ( $portfolios as $index => $portfolio )
					<div class="col-sm-6 sortable-item" data-id="{{ $portfolio->portfolio_id }}">
						<div class="card" style="background-color:rgba(0,0,0,.03)">
							<div class="card-body">
								<b class="sortable-item-title">{{ $portfolio->title }}</b>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		
			{{-- <div class="col-sm-6">
				<div class="card">
					<div class="card-footer">
						{{ __('Выбрать портфолио') }}
					</div>
					<div class="card-body sortable-column">
						@foreach ( $other_portfolios as $other_portfolio_item )
							<div class="card sortable-item" style="background-color:rgba(0,0,0,.03)" data-id="{{ $other_portfolio_item->id }}">
								<div class="card-body">
									<b>{{ $other_portfolio_item->title }}</b>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div> --}}
			
			{{-- <div class="col-sm-6">
				<div class="card">
					<div class="card-footer">
						{{ __('Портфолио жанра') }} &ldquo;{{ $genre->title }}&rdquo;
					</div>
					<div class="card-body sortable-column">
						@foreach ( $portfolios as $index => $portfolio )
							<div class="card sortable-item" style="background-color:rgba(0,0,0,.03)" data-id="{{ $portfolio->portfolio_id }}">
								<div class="card-body">
									<b>{{ $portfolio->title }}</b>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div> --}}
			
		</div>
	</div>
	
	<div class="card-footer">
		<a class="btn btn-outline-primary" href="{{ route('admin.genres.index') }}">{{ __('К списку жанров') }}</a>
	</div>
</div>
