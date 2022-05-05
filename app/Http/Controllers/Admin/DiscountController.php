<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiscountCreateRequest;
use App\Repositories\DiscountRepository;

class DiscountController extends Controller
{
    protected $discountRepository;
    public function __construct(DiscountRepository $discountRepository)
    {

        $this->discountRepository = $discountRepository;
        $this->entity             = $discountRepository->getEntity();
    }
    public function index()
    {
        $discounts = $this->entity->get();
        return view('admin.pages.discount.discount', [
            'discounts' => $discounts,
        ]);
    }
    public function showStore()
    {
        return view('admin.pages.discount.create');
    }
    public function store(DiscountCreateRequest $request)
    {
        $data = $request->all();
        $this->discountRepository->create($data);
        return redirect()->back()->with('sucsess', 'Create discount sucssess');

    }
}
