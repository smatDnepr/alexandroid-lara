<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MyEmail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function index()
    {
		$contacts = Contact::firstOrCreate();
		$myEmails = MyEmail::limit(4)->get();
        return view('admin.contacts.index', compact('contacts', 'myEmails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
			'phone' => 'required',
			'telegram' => 'required',
			'viber' => 'required',
			'whatsapp' => 'required',
			'facebook' => 'required',
			'instagram' => 'required',
			'flickr' => 'required',

			'email_0' => 'email|nullable',
			'email_1' => 'email|nullable',
			'email_2' => 'email|nullable',
			'email_3' => 'email|nullable',
		]);

		Contact::first()->update($request->all());

		$myEmails = MyEmail::limit(4)->get();

		if ( $myEmails->get(0) ) {
			$myEmails->get(0)->update(['email' =>  $request->email_0]);
		} else {
			MyEmail::create(['email' =>  $request->email_0]);
		}

		if ( $myEmails->get(1) ) {
			$myEmails->get(1)->update(['email' =>  $request->email_1]);
		} else {
			MyEmail::create(['email' =>  $request->email_1]);
		}

		if ( $myEmails->get(2) ) {
			$myEmails->get(2)->update(['email' =>  $request->email_2]);
		} else {
			MyEmail::create(['email' =>  $request->email_2]);
		}

		if ( $myEmails->get(3) ) {
			$myEmails->get(3)->update(['email' =>  $request->email_3]);
		} else {
			MyEmail::create(['email' =>  $request->email_3]);
		}

		// for ($i = 0; $i < 4; $i++) {
		// 	if ( $myEmails->get($i) ) {
		// 		$val = ''.
		// 		$myEmails->get($i)->update(['email' =>  $request->email_.$i]);
		// 	}


		// }

		//MyEmail::offset(0)->limit(1)->updateOrCreate([],['email' =>  $request->email_0]);

		//dd( $myEmails->get(2) );

		// $extraData = ExtraData::find($id);
		// $extraData->update($request->all());
		// $request->session()->flash('success', 'Изменения сохранены');
		return redirect()->route('admin.contacts.index');
    }
}
