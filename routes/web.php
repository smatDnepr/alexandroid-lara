<?php

use Illuminate\Support\Facades\Route;


/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect']], function ()
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize', 'localizationRedirect']], function ()
{
	// admin
	Route::prefix('admin')->middleware(['role:admin'])->group(function() {
		Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
		Route::get('/files', [App\Http\Controllers\Admin\FileController::class, 'index'])->name('admin.files');
		Route::get('/translates', [App\Http\Controllers\Admin\TranslateController::class, 'index'])->name('admin.translates');
		Route::get('/partners', [App\Http\Controllers\Admin\PartnerController::class, 'index'])->name('admin.partners');
		Route::resource('/portfolios', App\Http\Controllers\Admin\PortfolioController::class, ['names' => 'admin.portfolios']);
		Route::resource('/genres', App\Http\Controllers\Admin\GenreController::class, ['names' => 'admin.genres'])->except(['show', 'update']);
		Route::get('/landing', \App\Http\Controllers\Admin\LandingController::class)->name('admin.landing');
		Route::get('/politika', \App\Http\Controllers\Admin\PolitikaController::class)->name('admin.politika');
		Route::get('/contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts.index');
		Route::post('/contacts', [App\Http\Controllers\Admin\ContactController::class, 'update'])->name('admin.contacts.update');
	});


	// front
	Route::get('/', [App\Http\Controllers\Front\LandingController::class, 'index'])->name('front.index');
	Route::get('/politika-konfidenczialnosti', [App\Http\Controllers\Front\PagePolitikaController::class, 'index'])->name('front.politika');
	Route::get('/genre/{slug}', [App\Http\Controllers\Front\GenreController::class, 'show'])->name('front.genre');


	// email
	Route::post('/send-email-contact', [\App\Http\Controllers\Emails\ContactController::class, 'send'])->name('send-email-contact');



	Route::get('/dashboard', function() {
		return redirect()->route('admin.dashboard');
		//return view('dashboard');
	})->middleware(['auth'])->name('dashboard');
});




require __DIR__.'/auth.php';
