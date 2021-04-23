<?php

namespace App\Http\Livewire\Admin;

use App\Models\Genre;
use App\Models\GenrePortfolio;
use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class GenrePortfolios extends Component
{
	public $genreID;
	public $genre;
	public $portfolios;
	
	protected $listeners = ['startOrderSorting_denre_portfolios'];
	
	public function mount($genre_id)
	{
		$this->genreID    = $genre_id;
		$this->genre      = Genre::find($this->genreID);
		$this->portfolios = Portfolio::join('genre_portfolios', 'portfolios.id', '=', 'genre_portfolios.portfolio_id')
								->where('portfolios.genre_id', '=', $this->genreID)
								->orderBy('genre_portfolios.order')
								->get();
								
		$this->emit('finishUpdate');
	}
	
	
	public function startOrderSorting_denre_portfolios($objOrder)
	{
		foreach ($objOrder[0] as $key => $value) {
			GenrePortfolio::where('portfolio_id', $key)->update([
				'order' => $value
			]);
		}
		$this->mount($this->genreID);
	}
	
	
    public function render()
    {
        return view('livewire.admin.genre-portfolios');
    }
}
