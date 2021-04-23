jQuery(function($) {

	// Sidebar links
	var curLoc = window.location.protocol + '//' + window.location.host + window.location.pathname;
	$('.nav-sidebar .nav-link[href = "' + curLoc +'"]').addClass('active').closest('ul').prev('.nav-link').addClass('active');
	$('.nav-sidebar .nav-link[href = "' + curLoc +'"]').parents('.nav-item').addClass('menu-open');
	$('.nav-sidebar .nav-link').each(function() {
		let link = $(this).attr('href');
		if ( curLoc.indexOf(link) > -1 ) {
			$(this).addClass('active').closest('.nav-item').siblings('.nav-item').find('.nav-link').removeClass('active');
			$(this).closest('.nav-treeview').siblings('.nav-link').addClass('active').closest('.nav-item').siblings('.nav-item').find('.nav-link').removeClass('active');
		}
	});


	// .datepicker
	$( ".datepicker" ).datepicker({
		dateFormat: "dd.mm.yy",
		changeMonth: true,
		changeYear: true
	});


	// .card-body.items-list - для нескольких input:hidden и одной картинки для каждого
	$('.card-body.items-list').each(function() {
		let $sortableList = $(this).filter('.sortable-list');
		let suffix = $(this).data('suffix') ? '_' + $(this).data('suffix') : '';

		$sortableList.sortable({
			axis: 'y',
			items: '.sortable-item',
			opacity: 0.5,
			tolerance: 'pointer',
			forcePlaceholderSize: true,
			zIndex: 999999,
			stop: function() {
				var objOrder = {};
				$sortableList.find('.sortable-item').each(function(index, el) {
					var curID    = $(el).attr('data-id');
					objOrder[curID] = index;
				});
				Livewire.emit('startOrderSorting' + suffix, objOrder);
				$('body').addClass('body-show-overlay');
				Livewire.on('finishUpdate', function() {
					$('body').removeClass('body-show-overlay');
				});
			}
		});

		window.responsive_filemanager_callback = function(field_id) {
			let element = document.getElementById(field_id);
			element.dispatchEvent(new Event('input'));
			$(element).closest('form').find(':submit').trigger('click');
		}
	});


	// #images_hidden_input - для одного input:hidden и нескольких картинок под ним
	$('#images_hidden_input').each(function() {
		var $hiddenInput  = $(this);
		var $imgList      = $hiddenInput.closest('.img-list');
		var $template     = $imgList.find('figure.template');

		$(document).on('click', '.img-list .figure .del', function(e) {
			var img = $(this).closest('.figure').attr('data-img');
			$imgList.find('.figure[data-img="' + img + '"]').remove();
			updateHiddenInput();
		});

		setSortableImgList();

		window.responsive_filemanager_callback = function(field_id) {
			var imgInputArray = [];

			try {
				imgInputArray = eval( $hiddenInput.val() );
			} catch(e) {
				imgInputArray.push( $hiddenInput.val() );
			}

			imgInputArray.forEach(function(img) {
				var $figure;
				if ( $imgList.find('.figure[data-img="' + img + '"]').length ) { return };
				$figure = $template.clone(true).removeClass('template').appendTo($imgList);
				$figure.attr('data-img', img);
				$figure.find('.link').attr('href', img);
				$figure.find('.img').attr('src', img.replace('/uploads/source/', '/uploads/thumbs/'));
			});

			updateHiddenInput();
		}

		function setSortableImgList() {
			$imgList.sortable({
				//items: '> .figure:not(.template)',
				opacity: 0.5,
				tolerance: 'pointer',
				forcePlaceholderSize: true,
				stop: updateHiddenInput
			});
		}

		function updateHiddenInput() {
			var output = $imgList.find('.figure:not(.template)').map(function(i, el) {
				return $(el).attr('data-img');
			});
			$hiddenInput.val( JSON.stringify(output.get()) );
		}
	});


	// .sortable-columns-wrap - сортировка блоков между двумя колонками или внутри одной колонки
	// например перетягивать портфолио из одной колонки в другую
	$('.sortable-columns-wrap').each(function() {
		let $columns = $('.sortable-column', this);
		let suffix = $(this).data('suffix') ? '_' + $(this).data('suffix') : '';
		$columns.sortable({
			connectWith: $columns,
			tolerance: 'pointer',
			stop: function() {
				var objOrder = [];
				$columns.each(function(i) {
					let $column = $(this);
					objOrder[i] = {};
					$column.find('.sortable-item').each(function(index, el) {
						var curID    = $(el).attr('data-id');
						objOrder[i][curID] = index;
					});
				});
				Livewire.emit('startOrderSorting' + suffix, objOrder);
				$('body').addClass('body-show-overlay');
				Livewire.on('finishUpdate', function() {
					$('body').removeClass('body-show-overlay');
				});
			}
		});
	});


	tinymce.init({
		selector: 'textarea.tinymce_________',
		//language: 'ru',
		//height: 500,
		//width: 500,
		//max_height: 500,
		//max_width: 500,
		min_height: 100,
		//min_width: 400,
		menubar: false,
		plugins: 'contextmenu charmap anchor code template visualblocks link autoresize image imagetools autolink lists media table responsivefilemanager ', //  fullscreen
		toolbar: 'formatselect styleselect undo redo | bold italic underline strikethrough blockquote | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | image responsivefilemanager media | table template | charmap link visualblocks code removeformat', // formatselect  fullscreen
		block_formats: 'Paragraph=p;Header 2=h2;Header 3=h3;Header 4=h4', // это для кнопки formatselect
		style_formats: [{
				title: 'Bold text',
				inline: 'strong'
			},
			{
				title: 'Red text',
				inline: 'span',
				styles: {
					color: '#ff0000'
				}
			},
			{
				title: 'Red header',
				block: 'h1',
				styles: {
					color: '#ff0000'
				}
			},
			{
				title: 'Badge',
				inline: 'span',
				styles: {
					display: 'inline-block',
					border: '1px solid #2276d2',
					'border-radius': '5px',
					padding: '2px 5px',
					margin: '0 2px',
					color: '#2276d2'
				}
			},
			{
				title: 'Table row 1',
				selector: 'tr',
				classes: 'tablerow1'
			},
			{
				title: 'Containers',
				items: [{
						title: 'section',
						block: 'section',
						wrapper: true,
						merge_siblings: false
					},
					{
						title: 'article',
						block: 'article',
						wrapper: true,
						merge_siblings: false
					},
					{
						title: 'blockquote',
						block: 'blockquote',
						wrapper: true
					},
					{
						title: 'hgroup',
						block: 'hgroup',
						wrapper: true
					},
					{
						title: 'aside',
						block: 'aside',
						wrapper: true
					},
					{
						title: 'figure',
						block: 'figure',
						wrapper: true
					}
				]
			}
		],
		templates: [{
				title: 'Галерея',
				description: 'Какое-то описание',
				url: '/vendor/tinymce/templates/gallery.html'
			}
		],
		autoresize_min_height: 350,
		code_dialog_height: 500,
		code_dialog_width: 1000,
		external_filemanager_path: "/vendor/filemanager/",
		external_plugins: {
			"filemanager": "/vendor/filemanager/plugin.min.js"
		},
		//filemanager_access_key: 'dsflFWR9u2xQa' ,
		relative_urls: false,

		body_class: 'my_class', // класс для body, чтобы удобно было подключить тот же CSS что и для страницы
		content_css : '/vendor/tinymce/content.css', // для стилей редактора, чтобы были похожи на стили страницы
	});
});