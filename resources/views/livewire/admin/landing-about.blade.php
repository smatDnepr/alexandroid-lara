<div>
	<form wire:submit.prevent="updateLandingAbout()">
    	<div class="card-body items-list livevire-component-card-body">
			<div class="row">
				<div class="col-sm-1">
					<div class="form-group mb-5">
						<label>Background</label>
						<input type="hidden" id="img_input_hidden__landing_about_background" wire:model="background" />
						<div class="img-wrap">
							<a class="img" href="{{ $background }}" target="_blank">
								<img class="thumb" src="{{ $background_thumb }}" />
							</a>
						</div>
						<a href="#" data-toggle="modal" data-target="#rfm_img_modal__landing_about_background">{{ __('Изменить') }}</a>
					</div>
					<div class="form-group">
						<label>{{ __('Картинка') }}</label>
						<input type="hidden" id="img_input_hidden__landing_about_picture" wire:model="picture" />
						<div class="img-wrap">
							<a class="img" href="{{ $picture }}" target="_blank">
								<img class="thumb" src="{{ $picture_thumb }}" />
							</a>
						</div>
						<a href="#" data-toggle="modal" data-target="#rfm_img_modal__landing_about_picture">{{ __('Изменить') }}</a>
					</div>
				</div>
				<div class="col-sm-11">
					<div class="form-group mb-0" wire:ignore>
						<textarea id="textarea_landing_about_text" class="form-control" wire:model="text"></textarea>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
		</div>
	</form>


	<div class="modal fade" id="rfm_img_modal__landing_about_background" tabindex="-1" role="dialog" aria-labelledby="rfm_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
			<div class="modal-content">
				<iframe src="/vendor/filemanager/dialog.php?type=1&field_id=img_input_hidden__landing_about_background" frameborder="0" width="100%" height="630"></iframe>
			</div>
		</div>
	</div>

	<div class="modal fade" id="rfm_img_modal__landing_about_picture" tabindex="-1" role="dialog" aria-labelledby="rfm_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
			<div class="modal-content">
				<iframe src="/vendor/filemanager/dialog.php?type=1&field_id=img_input_hidden__landing_about_picture" frameborder="0" width="100%" height="630"></iframe>
			</div>
		</div>
	</div>


	<script>
		document.addEventListener('DOMContentLoaded', function() {
			Livewire.on('startLandingAboutUpdate', function() {
				$('body').addClass('body-show-overlay');
			});

			Livewire.on('finishLandingAboutUpdate', function() {
				setTimeout(function(){$('body').removeClass('body-show-overlay')}, 300)
			});

			tinymce.init({
				selector: '#textarea_landing_about_text',
				height: (window.innerHeight - 380),
				forced_root_block: false,
				menubar: false,
				plugins: 'contextmenu charmap anchor code template visualblocks link image autolink lists media table responsivefilemanager ', //  autoresize fullscreen  imagetools
				toolbar: 'formatselect undo redo | bold italic | code removeformat', // formatselect  fullscreen
				block_formats: 'Paragraph=p;Header 2=h2;Header 3=h3;Header 4=h4', // это для кнопки formatselect
				code_dialog_height: 500,
				code_dialog_width: 1000,
				external_filemanager_path: "/vendor/filemanager/",
				external_plugins: {
					"filemanager": "/vendor/filemanager/plugin.min.js"
				},
				relative_urls: false,
				body_class: 'my_class', // класс для body, чтобы удобно было подключить тот же CSS что и для страницы
				content_css : '/vendor/tinymce/content.css', // для стилей редактора, чтобы были похожи на стили страницы
				setup: function (editor) {
					editor.on('init change', function () {
						editor.save();
					});
					editor.on('input NodeChange', function (e) {
						@this.set('text', editor.getContent());
					});
				},
			});
		});
	</script>
</div>
