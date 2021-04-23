<?php

namespace App\Http\Livewire\Admin;

use App\Models\Partner as ModelsPartner;
use LaravelLocalization;
use Livewire\Component;

class Partner extends Component
{
	
	public $partners;
	public $logo;
	public $title;
	public $link;
	public $thumb;
	
	
	protected $rules = [
		'logo.*'  => '',
		'title.*' => '',
		'link.*'  => '',
		'thumb.*'  => '',
	];
	
	
	protected $listeners = ['startOrderSorting'];
	
	
	public function mount()
	{
		$this->partners = ModelsPartner::all()->sortBy('order');
		$this->logo     = $this->partners->pluck('logo')->toArray();
		$this->title    = $this->partners->pluck('title')->toArray();
		$this->link     = $this->partners->pluck('link')->toArray();
		$this->thumb    = array_map(
			function($str) {
				$a = ['png', 'jpg', 'jpeg', 'gif'];
				$ext = pathinfo( $str, PATHINFO_EXTENSION );
				if ( in_array(strtolower($ext), $a) ) {
					return str_replace('/uploads/source/', '/uploads/thumbs/', $str);
				} else {
					return $str;
				}
			}, $this->logo
		);
		$this->emit('finishUpdate');
	}
	
	
	public function addItem()
	{
		$maxOpder = $this->partners->max('order');
		
		// заполняем 'title' и 'text' для всех языков
		foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
			$title[$localeCode] = 'Название партнера - ' . $localeCode;
		};
		
		ModelsPartner::create([
			'order' => $maxOpder + 1,
			'title' => $title,
			'logo' => '/assets/img/no-image.png',
			'link' => '',
		]);
		
		$this->mount();
	}
	
	
	public function updateItem($index, $id)
	{
		$validatedData = $this->validate([
			'logo.'  . $index => 'required',
			'title.' . $index => 'required',
			'link.'  . $index => '',
		], [
			'title.' . $index . '.required'  => __('Заполни это поле'),
		]);
		
		$partner = $this->partners->firstWhere('id', $id);
		$partner->logo  = $validatedData['logo'][$index];
		$partner->title = $validatedData['title'][$index];
		$partner->link  = $validatedData['link'][$index];
		$partner->save();
		$this->mount();
	}
	
	
	public function deleteItem($id)
	{
		ModelsPartner::find($id)->delete();
		$this->mount();
	}
	
	
	public function startOrderSorting($objOrder)
	{
		foreach ($objOrder as $key => $value) {
			$partner = $this->partners->firstWhere('id', $key);
			$partner->order = $value;
			$partner->save();
		}
		$this->mount();
	}
	
	
	public function render()
	{
		return view('livewire.admin.partner');
	}
}
