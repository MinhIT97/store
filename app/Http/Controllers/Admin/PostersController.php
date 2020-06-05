<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PosterCreateRequest;
use App\Http\Requests\PosterUpdateRequest;
use App\Repositories\PosterRepository;
use App\Traits\Search;
use App\Validators\PosterValidator;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class PostersController extends Controller
{
    use Search;

    public function __construct(PosterRepository $repository, PosterValidator $validator)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
        $this->validator  = $validator;
    }

    public function index(Request $request)
    {
        $query = $this->entity->query();
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['title'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $posters = $query->published()->latest()->paginate(15);
        $posters->setPath(url()->current() . '?search=' . $request->get('search'));

        return view('admin.pages.poster.poster-list', [
            'posters' => $posters,
        ]);
    }

    public function store(PosterCreateRequest $request)
    {
        if ($request->hasFile('thumbnail')) {
            $request->thumbnail->move(base_path('/public/uploads'), $request->thumbnail->getClientOriginalName());
            $data              = $request->all();
            $data['thumbnail'] = $request->thumbnail->getClientOriginalName();
        } else {
            $data = $request->all();
        }

        $poster = $this->entity->create($data);

        if ($poster) {
            return redirect()->back()->with('sucsess', 'Create poster sucsses');
        }
        return redirect()->back()->with('errow', 'Create poster sucsses');
    }

    public function showCreate()
    {
        return view('admin.pages.poster.create-poster');
    }
    public function show($id)
    {
        $poster = $this->repository->find($id);

        return view('admin.pages.poster.edit-poster', [
            'poster' => $poster,
        ]);
    }

    public function edit($id, PosterUpdateRequest $request)
    {
        $poster = $this->entity->find($id);
        if ($request->hasFile('thumbnail')) {
            $request->thumbnail->move(base_path('/public/uploads'), $request->thumbnail->getClientOriginalName());
            $data              = $request->all();
            $data['thumbnail'] = $request->thumbnail->getClientOriginalName();
        } else {
            $data = $request->all();
        }

        if ($poster) {
            $poster->slug = null;
            $update       = $poster->update($data);

            if ($update) {
                return redirect()->back()->with('sucsess', 'Update poster thành công');
            }
        }
        return redirect()->back()->with('errow', 'Update Fail');
    }

    public function update(PosterUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $poster = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Poster updated.',
                'data'    => $poster->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag(),
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        if ($deleted) {
            return redirect()->back()->with('sucsess', 'Poster deleted sucsess');
        }
        abort(404);
    }
}
