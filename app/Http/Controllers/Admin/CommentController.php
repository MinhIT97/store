<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentAdminUpdateRequest;
use App\Repositories\CommentRepository;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentRepository;
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
        $this->commentEntity     = $commentRepository->getEntity();
    }
    public function show($id)
    {
        $comment = $this->commentEntity->findOrFail($id);
        return view();
    }

    public function update(CommentAdminUpdateRequest $request, $id)
    {

        $comment = $this->commentEntity->findOrFail($id);
        $comment->update($request->all());
        return redirect()->back()->with('sucsess', 'Delele sucsess');
    }

    public function destroy($id)
    {
        $comment = $this->commentEntity->findOrFail($id);
        $comment->delete();
        return redirect()->back()->with('sucsess', 'Delele sucsess');
    }
}
