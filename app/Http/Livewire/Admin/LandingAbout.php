<?php

namespace App\Http\Livewire\Admin;

use App\Models\LandingAbout as ModelsLandingAbout;
use Livewire\Component;
use LaravelLocalization;

class LandingAbout extends Component
{
	public $landing_about;
	public $text;
	public $background;
	public $background_thumb;
	public $picture;
	public $picture_thumb;


	public function mount()
	{
		$this->landing_about    = ModelsLandingAbout::firstOrCreate();
		$this->text             = $this->landing_about->text;

		$this->background       = $this->landing_about->background ? $this->landing_about->background : '/assets/img/no-image.png';
		$this->background_thumb = getThumb($this->background);

		$this->picture          = $this->landing_about->picture ? $this->landing_about->picture : '/assets/img/no-image.png';
		$this->picture_thumb    = getThumb($this->picture);
	}


	protected $rules = [
		'text' => 'required',
		'background' => 'required',
		'picture' => 'required',
	];


	public function updateLandingAbout()
	{
		$this->background_thumb = getThumb($this->background);
		$this->picture_thumb    = getThumb($this->picture);

		$this->emit('startLandingAboutUpdate');
		$this->landing_about->update($this->validate());
		$this->emit('finishLandingAboutUpdate');
	}


    public function render()
    {
        return view('livewire.admin.landing-about');
    }
}
