<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\OptionRepository;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    protected $optionRepository;
    public function __construct(OptionRepository $optionRepository)
    {
        $this->entityOption = $optionRepository->getEntity();
    }
    public function index()
    {
        $options = $this->entityOption->get();
        return view(
            'admin.pages.option.option-list',
            [
                'options' => $options,
            ]
        );
    }

    public function show($id)
    {
        $option = $this->entityOption->findOrFail($id);
        return view('admin.pages.option.option-detail', [
            'option' => $option,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $option = $this->entityOption->findOrFail($id);
        $option->update($data);
        return redirect()->back()->with('sucsess', 'Update Config sucsess');
    }
}
