<?php

namespace App\Http\Controllers\Web;

use App\Entities\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactCreateRequest;

class ContactController extends Controller
{
    public function store(ContactCreateRequest $request)
    {
        $data = $request->all();

        if (Contact::create($data)) {
            return redirect()->back()->with('sucsess', 'Create category sucsess');
        }
    }
}
