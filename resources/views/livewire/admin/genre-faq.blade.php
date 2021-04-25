<div>
     {{-- <form wire:submit.prevent="save"> --}}
		<div class="card-body items-list sortable-list genre-list p-0 livevire-component-card-body" data-suffix="genre_faq">
			@foreach ($faqs as $index => $faq)
				<div class="item genre-item sortable-item" data-id="{{ $faq->id }}">
					<form wire:key="form_genre_faq_{{ $index }}" wire:submit.prevent="updateItem({{ $index }}, {{ $faq->id }})" class="form-genre-faq">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{ __('Вопрос') }}:</label>
									<input class="form-control @error('question.' . $index) is-invalid @enderror" wire:model="question.{{ $index }}" />
								</div>
								<div class="form-group">
									<label>{{ __('Ответ') }}:</label>
									<textarea class="form-control @error('answer.' . $index) is-invalid @enderror" wire:model="answer.{{ $index }}" style="min-height:150px"></textarea>
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
										<button type="button" class="btn btn-sm btn-danger" onclick="confirm('{{ __('Подтверди удаление!') }}') || event.stopImmediatePropagation()" wire:click.prevent="deleteItem({{ $faq->id }})    ">
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
			<button type="button" class="btn btn-primary" wire:click="addItem()">{{__('Добавить вопрос и ответ')}}</button>
		</div>
	{{-- </form> --}}

	{{-- <script>
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
				//autoresize_max_height: (window.innerHeight - 400),
				forced_root_block: false,
				menubar: false,
				plugins: 'contextmenu charmap anchor code template visualblocks link image imagetools autolink lists media table responsivefilemanager ', //  autoresize fullscreen
				toolbar: 'formatselect styleselect undo redo | bold italic underline strikethrough blockquote | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | image responsivefilemanager media | table template | charmap link visualblocks code', // formatselect  fullscreen
				block_formats: 'Paragraph=p;Header 2=h2;Header 3=h3;Header 4=h4', // это для кнопки formatselect
				code_dialog_height: 500,
				code_dialog_width: 1000,
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
	</script> --}}
</div>
