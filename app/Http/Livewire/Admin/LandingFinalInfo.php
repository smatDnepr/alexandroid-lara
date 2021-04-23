<?php

namespace App\Http\Livewire\Admin;

use App\Models\LandingFinalInfo as ModelsLandingFinalInfo;
use Livewire\Component;
use LaravelLocalization;


class LandingFinalInfo extends Component
{
	public $landing_final_Info;
	public $title;
	public $text;
	public $background;
	public $background_thumb;


	public function mount()
	{
		$this->landing_final_Info = ModelsLandingFinalInfo::firstOrCreate();
		$this->title              = $this->landing_final_Info->title;
		$this->text               = $this->landing_final_Info->text;
		$this->background         = $this->landing_final_Info->background ? $this->landing_final_Info->background : '/assets/img/no-image.png';
		$this->background_thumb   = getThumb($this->background);
	}


	protected $rules = [
		'title'      => 'required',
		'text'       => 'required',
		'background' => 'required',
	];


	public function updateFinalInfo()
	{
		$this->background_thumb = getThumb($this->background);
		$this->landing_final_Info->update($this->validate());
		$this->emit('startFinalInfoUpdate');
		$this->emit('finishFinalInfoUpdate');
	}


    public function render()
    {
        return view('livewire.admin.landing-final-info');
    }
}
