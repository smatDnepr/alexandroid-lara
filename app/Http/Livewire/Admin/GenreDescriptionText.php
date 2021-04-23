<?php

namespace App\Http\Livewire\Admin;

use App\Models\GenreSeoText;
use LaravelLocalization;
use Livewire\Component;

class GenreDescriptionText extends Component
{
	public $genreID;
	public $genreSeoText;
	public $text;


	public function mount($genre_id)
	{
		$this->genreID     = $genre_id;

		// заполняем 'text' для всех языков
		// foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
		// 	$text[$localeCode] = 'Описание для жанра - ' . $localeCode;
		// };

		$this->genreSeoText = GenreSeoText::firstOrCreate([
			'genre_id' => $this->genreID
		], [
			'genre_id' => $this->genreID,
			//'text' => $text
		]);

		$this->text = $this->genreSeoText->text;
	}


	protected $rules = [
		'text' => 'string',
	];


	public function saveSEO()
	{
		$this->emit('startSeoUpdate');
		$this->genreSeoText->update($this->validate());
		$this->emit('finishSeoUpdate');
	}


    public function render()
    {
        return view('livewire.admin.genre-description-text');
    }
}
