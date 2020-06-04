<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColorCreateRequest;
use App\Http\Requests\ColorUpdateRequest;
use App\Traits\Search;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    use Search;
    public function index(Request $request)
    {
        $query  = Color::query();
        $query  = $this->applyConstraintsFromRequest($query, $request);
        $query  = $this->applySearchFromRequest($query, ['color'], $request);
        $query  = $this->applyOrderByFromRequest($query, $request);
        $colors = $query->paginate(10);
        return view('admin.pages.colors.color-list', [
            'colors' => $colors,
        ]);
    }

    public function showStore()
    {
        return view('admin.pages.colors.color-create');
    }

    public function store(ColorCreateRequest $request)
    {
        $data  = $request->all();
        $color = Color::create($data);
        if ($color) {
            return redirect()->back()->with('sucsess', 'Create color sucsses');
        }
        return redirect()->back()->with('errow', 'Create color fail');
    }
    public function edit($id, ColorUpdateRequest $request)
    {
        $data  = $request->all();
        $color = Color::find($id);
        if ($color) {
            $color->slug = null;
            $color->update($data);
            return redirect()->route('colors.show')->with('sucsess', 'Create poster sucsses');
        }
        return view('admin.pages.samples.error-404.blade.php');
    }

    public function showEdit($id)
    {
        $color = Color::find($id);

        return view('admin.pages.colors.color-edit', [
            'color' => $color,
        ]);

    }

    public function destroy($id)
    {
        $color = Color::find($id)->delete();

        if ($color) {
            return redirect()->route('colors.show')->with('sucsess', 'delete color sucsses');
        }
        return redirect()->route('colors.show')->with('errow', 'Delete poster errow');
    }
}
