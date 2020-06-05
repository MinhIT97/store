<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
