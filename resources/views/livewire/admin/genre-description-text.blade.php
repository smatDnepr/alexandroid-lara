<div>
     <form wire:submit.prevent="saveSEO">
		<div class="card-body livevire-component-card-body pb-0">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group mb-0" wire:ignore>
						<textarea id="textarea_genre_seo_text" class="form-control" wire:model="text"></textarea>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<a class="btn btn-outline-primary" href="{{ route('admin.genres.index') }}">{{ __('К списку жанров') }}</a>
			<button type="submit" class="btn btn-primary">{{__('Сохранить описание жанра')}}</button>
		</div>
	</form>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			Livewire.on('startSeoUpdate', function() {
				$('body').addClass('body-show-overlay');
			});

			Livewire.on('finishSeoUpdate', function() {
				setTimeout(function(){$('body').removeClass('body-show-overlay')}, 300)
			});

			tinymce.init({
				selector: '#textarea_genre_seo_text',
				height: (window.innerHeight - 380),
				forced_root_block: false,
				menubar: false,
				plugins: 'contextmenu charmap anchor code template visualblocks link image autolink lists media table responsivefilemanager ', //  autoresize fullscreen  imagetools
				toolbar: 'formatselect styleselect undo redo | bold italic blockquote | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | link visualblocks code removeformat', // formatselect  fullscreen
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
