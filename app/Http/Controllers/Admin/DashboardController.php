<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
	{
		if (Auth::check() && Auth::user()->hasRole('admin')) {
			return view('admin.dashboard.index');
		}

		return redirect()->route('login');
	}

}
