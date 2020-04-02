<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    protected $repository;
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }
    public function index()
    {
        $contacts = $this->entity->paginate(20);

        return view('admin.pages.contacts.contact-list', [
            'contacts' => $contacts,
        ]);
    }

    public function destroy($id)
    {
        $contacts = $this->entity->find($id);

        if ($contacts) {
            $contacts->delete();
            return redirect()->back()->with('sucsess', 'Delete contact sucsses');
        }
        return view('admin.pages.samples.error-404.blade.php');

    }
}
