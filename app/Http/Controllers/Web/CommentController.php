<?php

namespace App\Http\Controllers\Web;

use App\Entities\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentCreateREquest;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(CommentCreateREquest $request)
    {

        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Comement Error , Please login to comment');
        }
        $user_id         = Auth::user()->id;
        $data            = $request->all();
        $data['user_id'] = $user_id;
        Comment::create($data);
        return redirect()->back()->with('sucsess', 'comement sucsess');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Comement Error , Please login to comment');
        }
        $user_id = Auth::user()->id;
        $commment = Comment::findOrFail($id);
        if ($user_id === $commment->user_id) {
            $chilren = Comment::where('parent_id', $commment->id)->delete();
            $commment->delete();
            return redirect()->back()->with('sucsess', 'comement sucsess');
        } else {
            return redirect()->back()->with('error', 'Comement Error , Please login to comment');
        }
    }
}
