<?php

namespace App\Http\Livewire\Admin;

use App\Models\GenreFaq as ModelsGenreFaq;
use LaravelLocalization;
use Livewire\Component;

class GenreFaq extends Component
{
	public $genreID;
	public $faqs;
	public $question;
	public $answer;


	protected $listeners = ['startOrderSorting_genre_faq'];


	public function mount($genre_id)
	{
		$this->genreID  = $genre_id;
		$this->faqs      = ModelsGenreFaq::where('genre_id', $this->genreID)->orderBy('order')->get();
		$this->question = $this->faqs->pluck('question')->toArray();
		$this->answer   = $this->faqs->pluck('answer')->toArray();
		$this->emit('finishUpdate');
	}


	protected function rules()
	{
		return [
			'question.*' => '',
			'answer.*'   => '',
		];
	}


	public function addItem()
	{
		$maxOpder = $this->faqs->max('order');

		// заполняем 'title' и 'description' для всех языков
		// foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
		// 	$question[$localeCode] = 'Вопрос - ' . $localeCode;
		// 	$answer[$localeCode]  = 'Ответ - ' . $localeCode;
		// };

		$question['ru'] = 'Вопрос';
		$answer['ru']  = 'Ответ';

		ModelsGenreFaq::create([
			'genre_id' => $this->genreID,
			'order' => $maxOpder + 1,
			'question' => $question,
			'answer' => $answer
		]);

		$this->mount($this->genreID);
	}


	public function updateItem($index, $id)
	{
		$validatedData = $this->validate([
			'question.'.$index       => 'required|string',
			'answer.'.$index => 'required|string',
		]);
		$faq = $this->faqs->firstWhere('id', $id);
		$faq->question = $validatedData['question'][$index];
		$faq->answer   = $validatedData['answer'][$index];
		$faq->save();
		$this->mount($this->genreID);
	}


	public function deleteItem($id)
	{
		ModelsGenreFaq::find($id)->delete();
		$this->mount($this->genreID);
	}


	public function startOrderSorting_genre_faq($objOrder)
	{
		foreach ($objOrder as $key => $value) {
			$faq = $this->faqs->firstWhere('id', $key);
			$faq->order = $value;
			$faq->save();
		}
		$this->mount($this->genreID);
	}


    public function render()
    {
        return view('livewire.admin.genre-faq');
    }
}
