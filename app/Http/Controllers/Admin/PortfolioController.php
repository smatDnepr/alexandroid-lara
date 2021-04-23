<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\GenrePortfolio;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;
use LaravelLocalization;
use CodeZero\UniqueTranslation\UniqueTranslationRule;


class PortfolioController extends Controller
{

    public function index()
    {
        $portfolios = Portfolio::with(['genre', 'partner', 'images'])->get();
		return view('admin.portfolios.index', compact('portfolios'));
    }


    public function create()
    {
        $genres = Genre::all();
		$partners = Partner::all();
        return view('admin.portfolios.create', compact('genres', 'partners'));
    }


    public function store(Request $request)
    {
		$dataValidate = $request->validate([
			'title'    => 'required',
			'images' => 'required|json',
			'genre_id' => 'numeric|nullable',
			'partner_id' => 'numeric|nullable',
			'partner_title' => 'string|nullable',
			'date' => 'date|nullable'
		], [
			'images.required' => 'Выберите фотографии'
		]);

		// заполняем 'title' для всех языков
		foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
			$title[$localeCode] = $request->title;
		};

		$dataValidate['title'] = $title;

		$portfolio = Portfolio::create($dataValidate);

		// Фотографии
		$images = (array) json_decode($request->images);
		PortfolioImage::storeImages($images, $portfolio->id);

		// таблица 'genre_portfolios'
		GenrePortfolio::create([
			'portfolio_id' => $portfolio->id,
			'genre_id'     => $portfolio->genre_id,
		]);

		return redirect()->route('admin.portfolios.edit', $portfolio->id)->with('success', __('Портфолио создано'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
		$portfolio = Portfolio::find($id);
		$genres = Genre::all();
		$partners = Partner::all();
		return view('admin.portfolios.edit', compact('portfolio', 'genres', 'partners'));
    }


    public function update(Request $request, $id)
    {
        // для проверки уникальности slug используется этот пакет: https://github.com/codezero-be/laravel-unique-translation
		$request->validate([
			'title'    => 'required',
			'slug' => ['required', 'regex:/^[-a-z\d]+$/i', UniqueTranslationRule::for('portfolios')->ignore($id)],
			'images' => 'required|json|min:3',
		], [
			'images.min' => __('Выберите фотографии'),
			'slug.regex' => __('Поле Slug должно состоять только из цифр, латинских букв и знака минус'),
		]);

		$portfolio = Portfolio::find($id);
		$portfolio->update($request->all());

		// Фотографии
		$images = (array) json_decode($request->images);
		PortfolioImage::updateImages($images, $id);

		// таблица 'genre_portfolios'
		$genrePortfolio = GenrePortfolio::where('portfolio_id', $id);
		$genrePortfolio->update([
			'genre_id' => $request->genre_id,
		]);

		return redirect()->route('admin.portfolios.edit', $id)->with('success', __('Изменения сохранены'));
    }


    public function destroy($id)
    {
        Portfolio::find($id)->delete();
		return redirect()->route('admin.portfolios.index')->with( 'success', __('Пoртфолио удалено') );
    }
}
