<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\GenreFaq;
use App\Models\GenreInfoSliderSlide;
use App\Models\GenreInfoSliderTitle;
use App\Models\GenrePortfolio;
use App\Models\GenrePrice;
use App\Models\GenrePromoSlide;
use App\Models\GenreSeoMeta;
use App\Models\GenreSeoText;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class GenreController extends Controller
{
    public function show($slug)
	{
		$genre = Genre::where([
			['slug->' . app()->getLocale(), '=', $slug],
			['is_published', '=', '1']
		])->firstOrFail();

		// нужен для переключателя языков
		$slugTranslations = $genre->getTranslations('slug');

		$promoSlides = GenrePromoSlide::orderBy('order')->where('genre_id', $genre->id)->get();

		$portfolioIDS = GenrePortfolio::orderBy('order')->where('genre_id', $genre->id)->pluck('portfolio_id')->toArray();
		$portfolios  = Portfolio::where('genre_id', $genre->id)->with(['images', 'partner'])->get()->sortBy(function ($model) use ($portfolioIDS) {
			return array_search($model->id, $portfolioIDS);
		});

		$prices = GenrePrice::orderBy('order')->where('genre_id', $genre->id)->get();

		$infoSlider = GenreInfoSliderTitle::where('genre_id', $genre->id)->first();
		$infoSlides = GenreInfoSliderSlide::orderBy('order')->where('genre_id', $genre->id)->get();

		$seoText = GenreSeoText::where('genre_id', $genre->id)->first();

		$faqs = GenreFaq::orderBy('order')->where('genre_id', $genre->id)->get();

		$seoData = GenreSeoMeta::where('genre_id', $genre->id)->first();

		SEOMeta::setTitle($seoData->meta_title ? $seoData->meta_title : $genre->title);
		SEOMeta::setDescription($seoData->meta_description);
		SEOMeta::setKeywords($seoData->meta_keywords);

		OpenGraph::setTitle($seoData->meta_title);
		OpenGraph::setDescription($seoData->meta_description);
		OpenGraph::setUrl( url()->current() );

		return view('front.genre', [
			'genre'            => $genre,
			'promoSlides'      => $promoSlides,
			'portfolios'       => $portfolios,
			'prices'           => $prices,
			'slugTranslations' => $slugTranslations,
			'infoSlider'       => $infoSlider,
			'infoSlides'       => $infoSlides,
			'seoText'          => $seoText,
			'faqs'          => $faqs,
		]);
	}
}
