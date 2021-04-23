<a class="phone" href="tel:{{ clearPhone($contacts->phone) }}" title="{{ __('Позвонить') }}">
	<span>{{ $contacts->phone }}</span>
</a>

<div class="social">
	<a class="btn-soc-c30" href="{{ $contacts->telegram }}" target="_blank" title="Telegram">
		<svg class="ico"><use xlink:href="{{ asset('assets/img/ico-soc-telegram_40x40.svg#Layer_1') }}"></use></svg>
	</a>
	<a class="btn-soc-c30" href="{{ $contacts->viber }}" target="_blank" title="Viber">
		<svg class="ico"><use xlink:href="{{ asset('assets/img/ico-soc-viber_40x40.svg#Layer_1') }}"></use></svg>
	</a>
	<a class="btn-soc-c30" href="{{ $contacts->whatsapp }}" target="_blank" title="Whatsapp">
		<svg class="ico"><use xlink:href="{{ asset('assets/img/ico-soc-whatsapp_40x40.svg#Layer_1') }}"></use></svg>
	</a>
</div>