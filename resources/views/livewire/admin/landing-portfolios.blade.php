<div>
    <div class="card-body livevire-component-card-body">
		<div class="row sortable-columns-wrap" data-suffix="landing_portfolios">

			<div class="card-body sortable-column col-sm-6">
				<label class="mb-4">{{ __('Все портфолио') }}</label>
				@foreach ( $left_portfolios as $index => $left_portfolio )
					<div class="sortable-item" data-id="{{ $left_portfolio->id }}">
						<div class="card" style="background-color:rgba(0,0,0,.03)">
							<div class="card-body">
								<b class="sortable-item-title">{{ $left_portfolio->title }}</b>
							</div>
						</div>
					</div>
				@endforeach
			</div>

			<div class="card-body sortable-column col-sm-6">
				<label class="mb-4">{{ __('Портфолио на главной странице') }}</label>
				@foreach ( $right_portfolios as $index => $right_portfolio )
					<div class="sortable-item" data-id="{{ $right_portfolio->portfolio_id }}">
						<div class="card" style="background-color:rgba(0,0,0,.03)">
							<div class="card-body">
								<b class="sortable-item-title">{{ $right_portfolio->portfolio->title }}</b>
							</div>
						</div>
					</div>
				@endforeach
			</div>

		</div>
	</div>

	<div class="card-footer">
	</div>
</div>
