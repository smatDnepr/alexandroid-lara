<?php

namespace App\Http\Livewire\Admin;

use App\Models\GenrePrice;
use LaravelLocalization;
use Livewire\Component;

class GenrePrices extends Component
{
	public $genreID;
	public $prices;
	public $title;
	public $description;
	public $money;


	public function mount($genre_id)
	{
		$this->genreID     = $genre_id;
		$this->prices      = GenrePrice::where('genre_id', $this->genreID)->orderBy('order')->get();
		$this->title       = $this->prices->pluck('title')->toArray();
		$this->description = $this->prices->pluck('description')->toArray();
		$this->money       = $this->prices->pluck('money')->toArray();
		$this->emit('finishUpdate');
	}
	
	
	protected $listeners = ['startOrderSorting_genre_prices'];


	protected function rules()
	{
		return [
			'title.*'       => '',
			'description.*' => '',
			'money.*'       => '',
		];
	}


	public function addItem()
	{
		$maxOpder = $this->prices->max('order');

		// заполняем 'title' и 'description' для всех языков
		foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
			$title[$localeCode] = 'Заголовок прайса - ' . $localeCode;
			$description[$localeCode]  = 'Тут будет описание прайса - ' . $localeCode;
		};

		GenrePrice::create([
			'genre_id' => $this->genreID,
			'order' => $maxOpder + 1,
			'title' => $title,
			'description' => $description,
			'money' => 777,
		]);

		$this->mount($this->genreID);
	}


	public function updateItem($index, $id)
	{
		$validatedData = $this->validate([
			'title.'.$index       => 'string|nullable',
			'description.'.$index => 'required',
			'money.'.$index       => 'required|integer',
		]);

		$price = $this->prices->firstWhere('id', $id);
		$price->title       = $validatedData['title'][$index];
		$price->description = $validatedData['description'][$index];
		$price->money       = $validatedData['money'][$index];
		$price->save();

		$this->mount($this->genreID);
	}


	public function deleteItem($id)
	{
		GenrePrice::find($id)->delete();
		$this->mount($this->genreID);
	}
	
	
	public function startOrderSorting_genre_prices($objOrder)
	{
		foreach ($objOrder as $key => $value) {
			$price = $this->prices->firstWhere('id', $key);
			$price->order = $value;
			$price->save();
		}
		$this->mount($this->genreID);
	}


	public function render()
	{
		return view('livewire.admin.genre-prices');
	}
}
