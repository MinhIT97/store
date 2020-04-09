<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Size;
use App\Http\Controllers\Controller;
use App\Http\Requests\SizeCreateRequest;
use App\Http\Requests\SizeUpdateRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::get();
        return view(
            'admin.pages.sizes.size-list',
            [
                'sizes' => $sizes,

            ]
        );
    }

    public function showCreate()
    {
        return view('admin.pages.sizes.create-size');
    }

    public function store(SizeCreateRequest $request)
    {

        $data = $request->all();
        if (Size::create($data)) {
            return redirect()->back()->with('sucsess', 'Create size sucsess');
        }
    }
    public function showUpdate($id)
    {
        $size = Size::findOrFail($id);

        return view('admin.pages.sizes.edit-size', [
            'size' => $size,
        ]);
    }

    public function update(SizeUpdateRequest $request, $id)
    {
        $size = Size::findOrFail($id);
        $data = $request->all();
        if ($size->update($data)) {
            return redirect()->route('size.show')->with('sucsess', 'update size sucsess');
        }
        return redirect()->back()->with('errow', 'update size sucsess');
    }
    public function destroy($id)
    {
        $size = Size::findOrFail($id);
        if ($size) {
            $size->delete();
            return redirect()->back()->with('sucsess', 'Delete size sucsess');
        }
        return view('admin.pages.samples.error-404');
    }
}
