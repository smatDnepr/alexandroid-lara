<?php

namespace App\Http\Controllers\Emails;

use App\Http\Controllers\Controller;
use App\Mail\MailContact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function send(Request $request)
	{
		$result = false;

		if ( $request->ajax() && !empty($request->all()) ) {
			Mail::to('hvostuho@gmail.com')->cc('sergey.matyushkin@gmail.com')->send(new MailContact($request->all()));
			$result = true;
        }

		return response()->json(['result' => $result]);
	}
}
