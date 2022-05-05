<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUpdateRequest;
use App\Repositories\ContactRepository;
use App\Traits\Search;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use Search;
    protected $repository;
    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }
    public function index(Request $request)
    {
        $query    = $this->entity->query();
        $query    = $this->applyConstraintsFromRequest($query, $request);
        $query    = $this->applySearchFromRequest($query, ['color'], $request);
        $query    = $this->applyOrderByFromRequest($query, $request);
        $contacts = $query->paginate(20);
        $contacts->setPath(url()->current() . '?search=' . $request->get('search'));

        return view('admin.pages.contacts.contact-list', [
            'contacts' => $contacts,
        ]);
    }

    public function show($id)
    {
        $contact = $this->entity->findOrFail($id);
        return view('admin.pages.contacts.edit-contact', [
            'contact' => $contact,
        ]);
    }

    public function update(ContactUpdateRequest $request, $id)
    {
        $contact = $this->entity->findOrFail($id);
        $data    = $request->all();
        $contact->update($data);
        return redirect()->back()->with('sucsess', 'Update contact sucsses');
    }

    public function destroy($id)
    {
        $contacts = $this->entity->findOrFail($id);

        $contacts->delete();
        return redirect()->back()->with('sucsess', 'Delete contact sucsses');
    }
}
