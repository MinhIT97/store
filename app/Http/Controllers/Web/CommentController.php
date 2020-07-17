<?php

namespace App\Http\Controllers\Web;

use App\Entities\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentCreateREquest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(CommentCreateREquest $request)
    {
        $data = $request->all();
        Comment::create($data);
        return redirect()->back()->with('sucsess', 'comement sucsess');
    }
}
