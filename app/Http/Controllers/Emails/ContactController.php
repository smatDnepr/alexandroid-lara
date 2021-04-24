<?php

namespace App\Http\Controllers\Emails;

use App\Http\Controllers\Controller;
use App\Mail\MailContact;
use App\Models\MyEmail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function send(Request $request)
	{
		$result = false;

		$myEmails = MyEmail::pluck('email')->toArray();
		$myEmails = array_values(array_filter($myEmails));

		if ( $request->ajax() && !empty($request->all()) ) {
			foreach ($myEmails as $recipient) {
				Mail::to($recipient)->send(new MailContact($request->all()));
			}
			$result = true;
        }

		return response()->json(['result' => $result]);
	}
}
