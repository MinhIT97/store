<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ProvinceRepository;
use App\Transformers\ProvinceTransformer;

use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    protected $repository;

    public function __construct( ProvinceRepository $repository)
    {
        $this->repository  = $repository;
        $this->entity      = $repository->getEntity();
        $this->transformer = ProvinceTransformer::class;
    }
    public function show(Request $request, $id)
    {
        $districts = $this->entity->find($id)->districts;

        return response()->json(['districts' => $districts]);
    }
}
