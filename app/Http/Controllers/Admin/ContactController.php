<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function index()
    {
		$contacts = Contact::firstOrCreate();
        return view('admin.contacts.index', compact('contacts'));
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
		]);

		Contact::first()->update($request->all());

		// $extraData = ExtraData::find($id);
		// $extraData->update($request->all());
		// $request->session()->flash('success', 'Изменения сохранены');
		return redirect()->route('admin.contacts.index');
    }
}
