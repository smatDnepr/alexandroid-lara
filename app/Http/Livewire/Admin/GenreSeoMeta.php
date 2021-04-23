<?php

namespace App\Http\Livewire\Admin;

use App\Models\GenreSeoMeta as ModelsGenreSeoMeta;
use Livewire\Component;

class GenreSeoMeta extends Component
{
	public $genreID;
	public $genreSeoMeta;

	public $meta_title;
	public $meta_description;
	public $meta_keywords;


	protected function rules() {
		return [
			'meta_title'       => ['string', 'max:70'],
			'meta_description' => ['string', 'max:160'],
			'meta_keywords'    => ['string', 'max:255'],
		];
	}


	public function mount($genre_id)
	{
		$this->genreID = $genre_id;

		$this->genreSeoMeta = ModelsGenreSeoMeta::firstOrCreate([
			'genre_id' => $this->genreID
		], [
			'genre_id' => $this->genreID,
		]);

		$this->meta_title       = $this->genreSeoMeta->meta_title;
		$this->meta_description = $this->genreSeoMeta->meta_description;
		$this->meta_keywords    = $this->genreSeoMeta->meta_keywords;
	}


	public function save()
	{
		$validatedData = $this->validate();
		$this->genreSeoMeta->update($validatedData);
	}


    public function render()
    {
        return view('livewire.admin.genre-seo-meta');
    }
}
