<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Genre;
use App\Models\GoogleAnalytic;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.parts.footer-genres', function($view) {
			$genres = Genre::where('is_published', '=', '1')->get();
			$view->with(['genres' => $genres]);
		});

		View::composer(['front.parts.footer-contacts', 'front.parts.header-contacts', 'front.parts.mobile-menu-contacts'], function($view) {
			$contacts = Contact::first();
			$view->with(['contacts' => $contacts]);
		});

		View::composer(['front.layouts.layout'], function($view) {
			if ( GoogleAnalytic::limit(1)->get()->count() != 0 ) {
				$googleAnalytic = GoogleAnalytic::limit(1)->get()[0];
				if ( !! $googleAnalytic['enabled'] ) {
					$view->with(['googleAnalytic' => $googleAnalytic]);
				}
			}
		});
    }
}
