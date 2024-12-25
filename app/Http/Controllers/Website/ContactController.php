<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contacts.index');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());

        toast(trans('web.contact_created'), 'success');

        return back();
    }
}
