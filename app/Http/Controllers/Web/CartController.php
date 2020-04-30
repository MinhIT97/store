<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartCreateRequest;
use App\Repositories\CartRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
    protected $repository;
    public function __construct(CartRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();

    }

    public function checkUser()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
        } else {
            $id = (string) Str::uuid();
        }
        return $id;
    }
    public function addCart(CartCreateRequest $request)
    {

        $id = $this->checkUser();

        dd($id);

        // $cookie = cookie('test', 'forrebeadadadsadsa',900000);

        // dd($cookie);

    }
}
