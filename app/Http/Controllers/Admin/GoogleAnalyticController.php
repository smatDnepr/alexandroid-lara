<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GoogleAnalytic;
use Illuminate\Http\Request;

class GoogleAnalyticController extends Controller
{
    public function index()
	{
		if ( GoogleAnalytic::limit(1)->get()->count() == 0 ) {
			GoogleAnalytic::create([
				'code_head' => '',
				'code_body' => '',
				'enabled' => '0'
			]);
		}

		$googleAnalytic = GoogleAnalytic::limit(1)->get()[0];

		return view('admin.google-analytics.index', compact('googleAnalytic'));
	}


	public function update(Request $request)
	{
		$data = $request->all();

		$data['enabled'] = !! $request->input('enabled');

		$googleAnalytic = GoogleAnalytic::limit(1)->get()[0];

		$googleAnalytic->update($data);

		return redirect()->route('admin.google-analytics.index')->with(['success' => __('Данные сохранены') ]);
	}
}
