<?php

namespace App\Http\Livewire\Admin;

use App\Models\LandingInfoSliderCommon as ModelsLandingInfoSliderCommon;
use Livewire\Component;

class LandingInfoSliderCommon extends Component
{
	public $landing;
	public $title;
	public $subtitle;
	public $background;
	public $thumb;


	public function mount()
	{
		$this->landing    = ModelsLandingInfoSliderCommon::firstOrCreate();
		$this->title      = $this->landing->title;
		$this->subtitle   = $this->landing->subtitle;
		$this->background = $this->landing->background ? $this->landing->background : '/assets/img/no-image.png';
		$this->thumb      = getThumb($this->background);
	}


	protected $rules = [
		'title'      => 'required',
		'subtitle'   => 'required',
		'background' => '',
	];


	public function updateItem()
	{
		$this->landing->update($this->validate());
		$this->mount();
	}


    public function render()
    {
        return view('livewire.admin.landing-info-slider-common');
    }
}
