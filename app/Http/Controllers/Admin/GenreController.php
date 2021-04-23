<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use LaravelLocalization;


class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
		return view('admin.genres.index', compact('genres'));
    }
	
	
    public function create()
    {
        return view('admin.genres.create');
    }
	
	
    public function store(Request $request)
    {
        $dataValidate = $request->validate([
			'title' => 'required',
		]);
		
		// заполняем 'title' для всех языков
		foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
			$title[$localeCode] = $request->title;
		};
		
		$dataValidate['title'] = $title;
		
		$genre = Genre::create($dataValidate);
		
		return redirect()->route('admin.genres.edit', $genre->id);
    }
	
	
    public function edit($id)
    {
        $genre = Genre::find($id);
		return view('admin.genres.edit', compact('genre'));
    }
	
	
    public function destroy($id)
    {
        Genre::find($id)->delete();
		return redirect()->route('admin.genres.index')->with( 'success', __('Жанр удален') );
    }
}
