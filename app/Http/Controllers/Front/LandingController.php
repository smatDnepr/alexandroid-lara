<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Landing;
use App\Models\LandingAbout;
use App\Models\LandingFinalInfo;
use App\Models\LandingInfoSliderCommon;
use App\Models\LandingInfoSliderSlide;
use App\Models\LandingPortfolio;
use App\Models\LandingPromoSlide;
use App\Models\LandingSeoMeta;
use App\Models\Partner;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class LandingController extends Controller
{
	public function index() {
		$headerH1         = Landing::first()->title;
		$promoSlides      = LandingPromoSlide::orderBy('order')->get();
		$about            = LandingAbout::first();
		$contact          = Contact::first();
		$infoSliderCommon = LandingInfoSliderCommon::first();
		$infoSliderSlides = LandingInfoSliderSlide::orderBy('order')->get();
		$portfolios       = LandingPortfolio::orderBy('order')->with(['portfolio', 'portfolio.images', 'portfolio.partner'])->get();
		$partners         = Partner::orderBy('order')->get();
		$finalInfo        = LandingFinalInfo::first();
		$seoData          = LandingSeoMeta::first();

		SEOMeta::setTitle($seoData->meta_title);
		SEOMeta::setDescription($seoData->meta_description);
		SEOMeta::setKeywords($seoData->meta_keywords);

		OpenGraph::setTitle($seoData->meta_title);
		OpenGraph::setDescription($seoData->meta_description);
		OpenGraph::setUrl( url()->current() );


		return view('front.index', [
			'headerH1'         => $headerH1,
			'promoSlides'      => $promoSlides,
			'about'            => $about,
			'contact'          => $contact,
			'infoSliderCommon' => $infoSliderCommon,
			'infoSliderSlides' => $infoSliderSlides,
			'portfolios'       => $portfolios,
			'partners'         => $partners,
			'finalInfo'        => $finalInfo,
		]);
	}
}
