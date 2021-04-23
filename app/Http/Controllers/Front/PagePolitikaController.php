<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PagePolitika;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class PagePolitikaController extends Controller
{
	public function index()
	{
		$politika = PagePolitika::first();

		SEOMeta::setTitle($politika->title);
		OpenGraph::setTitle($politika->title);
		OpenGraph::setUrl( url()->current() );

		return view('front.politika', ['politika' => $politika]);
	}
}
