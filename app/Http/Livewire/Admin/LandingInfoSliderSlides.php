<?php

namespace App\Http\Livewire\Admin;

use App\Models\LandingInfoSliderSlide;
use Livewire\Component;
use LaravelLocalization;

class LandingInfoSliderSlides extends Component
{
	public $landing;
	public $slides;
	public $title;
	public $text;
	public $img;

	protected $listeners = ['startOrderSorting_landing_info_slider_slides'];


	public function mount()
	{
		$this->slides  = LandingInfoSliderSlide::orderBy('order')->get();
		$this->title   = $this->slides->pluck('title')->toArray();
		$this->text    = $this->slides->pluck('text')->toArray();
		$this->img     = $this->slides->pluck('img')->toArray();
		$this->emit('finishUpdate');
	}


	protected function rules()
	{
		return [
			'title.*'          => '',
			'text.*'           => '',
			'img.*'            => '',
		];
	}


	public function addItem()
	{
	    $maxOpder = $this->slides->max('order');

		// заполняем 'title' и 'text' для всех языков
		foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
			$title[$localeCode] = 'Заголовок слайда - ' . $localeCode;
			$text[$localeCode]  = 'Тут будет текст слайда - ' . $localeCode;
		};

	    LandingInfoSliderSlide::create([
	        'order' => $maxOpder + 1,
	        'img' => '/assets/img/no-image.svg',
	        'title' => $title,
	        'text' => $text,
	    ]);

		$this->mount();
	}


	public function updateItem($index, $id)
	{
	    $validatedData = $this->validate([
			'img.'   . $index => 'required',
			'title.' . $index => 'required',
			'text.'  . $index => 'required',
		]);

	    $slide = $this->slides->firstWhere('id', $id);
		$slide->img   = $validatedData['img'][$index];
		$slide->title = $validatedData['title'][$index];
		$slide->text  = $validatedData['text'][$index];
		$slide->save();
	    $this->mount();
	}


	public function deleteItem($slide_id)
	{
		LandingInfoSliderSlide::find($slide_id)->delete();
		$this->mount();
	}


	public function startOrderSorting_landing_info_slider_slides($objOrder)
	{
		foreach ($objOrder as $key => $value) {
			$slide = $this->slides->firstWhere('id', $key);
			$slide->order = $value;
			$slide->save();
		}
		$this->mount();
	}


    public function render()
    {
        return view('livewire.admin.landing-info-slider-slides');
    }
}
