<?php

namespace App\Http\Livewire\Admin;

use App\Models\LandingSeoMeta as ModelsLandingSeoMeta;
use Livewire\Component;

class LandingSeoMeta extends Component
{
	public $landing;
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


	public function mount()
	{
		$this->landing = ModelsLandingSeoMeta::firstOrCreate();
		$this->meta_title       = $this->landing->meta_title;
		$this->meta_description = $this->landing->meta_description;
		$this->meta_keywords    = $this->landing->meta_keywords;
	}


	public function save()
	{
		$validatedData = $this->validate();
		$this->landing->update($validatedData);
	}


    public function render()
    {
        return view('livewire.admin.landing-seo-meta');
    }
}
