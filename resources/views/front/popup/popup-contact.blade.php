<div id="popup_contact" class="popup-hidden">
	<div class="wrapper scroll-y">
		<div class="inner">
			<div class="content">
				<div class="header">
					<h3>{{ __('Форма обратной связи') }}</h3>
					<p><span class="required">*</span> {{ __('Обязательные поля') }}</p>
				</div>
				<div class="form-wrap">
					{{-- <form action="{{route('send-email-contact')}}" method="post" autocomplete="off"> --}}
					<form autocomplete="off">
						@csrf
						<div class="field required">
							<div class="title"><span>{{ __('Ваше имя') }}</span></div>
							<div class="input-wrap">
								<input type="text" name="username" data-name="username" value="" autocomplete="off" />
							</div>
							<div class="error">{{ __('Укажите свое имя') }}</div>
						</div>
						<div class="field required">
							<div class="title"><span>{{ __('Телефон для обратной связи') }}</span></div>
							<div class="input-wrap">
								<input type="tel" name="phone" data-name="phone" value="" autocomplete="off" />
							</div>
							<div class="error">{{ __('Укажите свой телефон') }}</div>
						</div>
						<div class="field">
							<div class="title"><span>{{ __('Сообщение') }}</span></div>
							<p>{{ __('Оставьте, пожалуйста, здесь свои вопросы. Буду рад на них ответить.') }}</p>
							<div class="textarea-wrap">
								<textarea name="mess"></textarea>
							</div>
						</div>
						<div class="field submit">
							<div class="btn-wrap">
								<button class="btn-primary js-btn-send" type="submit">
									<span>{{ __('Отправить') }}</span>
									<svg class="ico"><use xlink:href="{{ asset('assets/img/ico-send_34x34.svg#Layer_1') }}"></use></svg>
								</button>
								<span class="ajax-loader">
									<i class="fas fa-2x fa-sync-alt fa-spin"></i>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="message-success">
				<div class="inner">
					<div>{{ __('Ваше сообщение успешно отправлено') }}</div>
				</div>
			</div>

			<div class="message-error">
				<div class="inner">
					<div>{{ __('При отправке письме произошла ошибка.') }}</div>
					<div>{{ __('Попробуйте позже.') }}</div>
				</div>
			</div>
		</div>
	</div>
</div>