<?php

namespace App\Http\Livewire\Admin;

use App\Models\GenrePromoSlide;
use Livewire\Component;
use LaravelLocalization;

class GenrePromoSlides extends Component
{
	public $genreID;
	public $slides;
	public $img;
	public $thumb;
	public $title;
	public $text;
	public $btn_functional;
	public $btn_link;

	protected $listeners = ['startOrderSorting_genre_promo_slides'];


	public function mount($genre_id)
	{
		$this->genreID       = $genre_id;
		$this->slides         = GenrePromoSlide::where('genre_id', $this->genreID)->orderBy('order')->get();
		$this->img            = $this->slides->pluck('img')->toArray();
		$this->title          = $this->slides->pluck('title')->toArray();
		$this->text           = $this->slides->pluck('text')->toArray();
		$this->btn_functional = $this->slides->pluck('btn_functional')->toArray();
		$this->btn_link       = $this->slides->pluck('btn_link')->toArray();
		$this->thumb    = array_map(
			function($str) {
				$a = ['png', 'jpg', 'jpeg', 'gif'];
				$ext = pathinfo( $str, PATHINFO_EXTENSION );
				if ( in_array(strtolower($ext), $a) ) {
					return str_replace('/uploads/source/', '/uploads/thumbs/', $str);
				} else {
					return $str;
				}
			}, $this->img
		);

		$this->emit('finishUpdate');
	}


	protected function rules()
	{
		return [
			'img.*'            => '',
			'thumb.*'          => '',
			'title.*'          => '',
			'text.*'           => '',
			'btn_functional.*' => '',
			'btn_link.*'       => '',
		];
	}


	public function addItem()
	{
	    $maxOpder = $this->slides->max('order');

		// заполняем 'title' и 'text' для всех языков
		// foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
		// 	$title[$localeCode] = 'Заголовок слайда - ' . $localeCode;
		// 	$text[$localeCode]  = 'Тут будет текст слайда - ' . $localeCode;
		// };

	    GenrePromoSlide::create([
	        'genre_id' => $this->genreID,
	        'order' => $maxOpder + 1,
	        'img' => '/assets/img/no-image.png',
	        // 'title' => $title,
	        // 'text' => $text,
	        'btn_functional' => 0,
	    ]);

		$this->mount($this->genreID);
	}


	public function updateItem($index, $id)
	{
	    $validatedData = $this->validate([
			'img.'            . $index => 'required',
			'title.'          . $index => 'required',
			'text.'           . $index => 'required',
			'btn_functional.' . $index => '',
			'btn_link.'       . $index => '',
		]);

	    $slide = $this->slides->firstWhere('id', $id);
		$slide->img            = $validatedData['img'][$index];
		$slide->title          = $validatedData['title'][$index];
		$slide->text           = $validatedData['text'][$index];
		$slide->btn_functional = $validatedData['btn_functional'][$index];
		$slide->btn_link       = $validatedData['btn_link'][$index];
		$slide->save();
	    $this->mount($this->genreID);
	}


	public function deleteItem($slide_id)
	{
		GenrePromoSlide::find($slide_id)->delete();
		$this->mount($this->genreID);
	}


	public function startOrderSorting_genre_promo_slides($objOrder)
	{
		foreach ($objOrder as $key => $value) {
			$slide = $this->slides->firstWhere('id', $key);
			$slide->order = $value;
			$slide->save();
		}
		$this->mount($this->genreID);
	}


	public function render()
	{
	    return view('livewire.admin.genre-promo-slides');
	}

}
