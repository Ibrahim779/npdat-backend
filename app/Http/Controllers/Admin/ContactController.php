<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    
    public function index()
    {
        $this->authorize('viewAny', Contact::class);

        $contacts = Contact::latest()->paginate(20);

        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        $this->authorize('update', Contact::class);

        return view('dashboard.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $this->authorize('delete', Contact::class);

        $contact->delete();

        toast(trans('web.contact_deleted'), 'success');

        return to_route('admin.web.contacts.index');
    }
}
