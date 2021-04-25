<?php

namespace App\Http\Livewire\Admin;

use App\Models\GenreInfoSliderTitle;
use Livewire\Component;
use LaravelLocalization;


class GenreInfoSliderTitles extends Component
{
	public $genreID;
	public $genre;
	public $title;
	public $background;
	public $thumb;


	public function mount($genre_id)
	{
		// // заполняем 'title' для всех языков
		// foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
		// 	$title[$localeCode] = 'Заголовок для слайдера - ' . $localeCode;
		// };

		$this->genreID = $genre_id;

		$this->genre = GenreInfoSliderTitle::firstOrCreate([
			'genre_id' => $this->genreID
		], [
			'genre_id' => $this->genreID,
			//'title' => $title
		]);

		$this->title      = $this->genre->title;
		$this->background = $this->genre->background ? $this->genre->background : '/assets/img/no-image.png';
		$this->thumb      = getThumb($this->background);
	}


	protected $rules = [
		'title' => 'required',
		'background' => 'required',
	];


	public function updateItem()
	{
		$this->genre->update($this->validate());
		$this->mount($this->genreID);
	}


    public function render()
    {
        return view('livewire.admin.genre-info-slider-titles');
    }
}
