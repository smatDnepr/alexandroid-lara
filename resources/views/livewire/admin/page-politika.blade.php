<div>
	<form wire:submit.prevent="updatePagePolitika()">
    	<div class="card-body livevire-component-card-body-v3">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>{{ __('Заголовок') }} *</label>
						<input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.defer="title" />
					</div>

					<div class="form-group mb-0 @error('text') is-invalid @enderror">
						<div wire:ignore>
							<label>{{ __('Текст') }} *</label>
							<textarea id="textarea_page_politika_text" class="form-control" wire:model="text"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
		</div>
	</form>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			Livewire.on('startPagePolitikaUpdate', function() {
				$('body').addClass('body-show-overlay');
			});

			Livewire.on('finishPagePolitikaUpdate', function() {
				setTimeout(function(){$('body').removeClass('body-show-overlay')}, 300)
			});

			tinymce.init({
				selector: '#textarea_page_politika_text',
				height: (window.innerHeight - 450),
				forced_root_block: false,
				menubar: false,
				plugins: 'contextmenu charmap anchor code template link image autolink lists media table responsivefilemanager ',

				toolbar: 'formatselect undo redo | bold italic blockquote | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | image | link code removeformat',

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
