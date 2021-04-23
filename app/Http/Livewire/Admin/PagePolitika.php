<?php

namespace App\Http\Livewire\Admin;

use App\Models\PagePolitika as ModelsPagePolitika;
use Livewire\Component;

class PagePolitika extends Component
{

	public $page_politika;
	public $title;
	public $text;


	public function mount()
	{
		$this->page_politika = ModelsPagePolitika::firstOrCreate();
		$this->title              = $this->page_politika->title;
		$this->text               = $this->page_politika->text;
	}


	protected $rules = [
		'title'      => 'required',
		'text'       => 'required',
	];


	public function updatePagePolitika()
	{
		$this->page_politika->update($this->validate());
		$this->emit('startPagePolitikaUpdate');
		$this->emit('finishPagePolitikaUpdate');
	}


    public function render()
    {
        return view('livewire.admin.page-politika');
    }
}
