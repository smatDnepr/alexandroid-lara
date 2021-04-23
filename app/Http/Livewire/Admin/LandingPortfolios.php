<?php

namespace App\Http\Livewire\Admin;

use App\Models\LandingPortfolio;
use App\Models\Portfolio;
use Livewire\Component;

class LandingPortfolios extends Component
{
	public $landing;
	public $left_portfolios;

	public $right_portfolios;
	public $right_portfolios_ids;

	protected $listeners = ['startOrderSorting_landing_portfolios'];


	public function mount()
	{
		// слева нужно показать все портфолио, кроме тех, которые в правом списке
		$this->right_portfolios_ids = LandingPortfolio::orderBy('order')->pluck('portfolio_id')->toArray();
		$this->left_portfolios      = Portfolio::whereNotIn('id', $this->right_portfolios_ids)->get();

		// справа нужно показать портфолио, которые относятся к лендингу
		$this->right_portfolios = LandingPortfolio::orderBy('order')->with('portfolio')->get();

		$this->emit('finishUpdate');
	}


	public function startOrderSorting_landing_portfolios($objOrder)
	{
		LandingPortfolio::truncate();

		foreach ($objOrder[1] as $key => $value) {
			LandingPortfolio::create([
				'portfolio_id' => $key,
				'order' => $value
			]);
		}

		$this->mount();
	}


    public function render()
    {
        return view('livewire.admin.landing-portfolios');
    }
}
