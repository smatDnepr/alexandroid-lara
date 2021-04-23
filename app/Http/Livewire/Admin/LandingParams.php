<?php

namespace App\Http\Livewire\Admin;

use App\Models\Landing;
use Livewire\Component;

class LandingParams extends Component
{
	public $landing;
	public $title;


	protected function rules() {
		return [
			'title' => ['required'],
		];
	}


	public function mount()
	{
		$this->landing = Landing::firstOrCreate();
		$this->title = $this->landing->title;
	}


    public function render()
    {
        return view('livewire.admin.landing-params');
    }


	public function saveLandingParams()
	{
		$validatedData = $this->validate();
		$this->landing->update($validatedData);
	}
}
