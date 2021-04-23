<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Genre;
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
    }
}
