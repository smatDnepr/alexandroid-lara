<?php

namespace App\Http\Livewire\Admin;

use App\Models\Genre;
use Livewire\Component;
use CodeZero\UniqueTranslation\UniqueTranslationRule;

class GenreParams extends Component
{
	public $genre;
	public $title;
	public $slug;
	public $is_published;


	public function mount($genre_id)
	{
		$this->genre = Genre::find($genre_id);
		$this->title = $this->genre->title;
		$this->slug  = $this->genre->slug;
		$this->is_published  = !! $this->genre->is_published;
	}


	public function render()
	{
		return view('livewire.admin.genre-params');
	}


	protected function rules() {
		return [
			'title' => ['required'],
			'slug' => ['required', 'regex:/^[-a-z\d]+$/i', UniqueTranslationRule::for('genres')->ignore($this->genre->id)],
			'is_published'  => ['boolean']
		];
	}


	protected function messages() {
		return [
			'slug.regex' => __('Поле Slug должно состоять только из цифр, латинских букв и знака минус'),
		];
	}


	public function saveGenreParams()
	{
		$validatedData = $this->validate();
		$this->genre->update($validatedData);
	}
}
