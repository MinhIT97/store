<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentCreateREquest;
use App\Repositories\PostRepository;
use App\Repositories\ProductRepository;

class CommentController extends Controller
{

    protected $productRepository;
    protected $postRepository;
    public function __construct(ProductRepository $productRepository, PostRepository $postRepository)
    {
        $this->productEntity = $productRepository->getEntity();
        $this->postEntity    = $postRepository->getEntity();
    }
    public function create($id, CommentCreateREquest $request)
    {
        $this->productEntity->find($id)->comments()->create([
            'body'    => $request->body,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'sucsess'  => true,
            'messages' => "Create sucssess",
        ]);
    }

    public function createBlog($id, CommentCreateREquest $request)
    {
        $this->postEntity->find($id)->comments()->create([
            'body'    => $request->body,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'sucsess'  => true,
            'messages' => "Create sucssess",
        ]);
    }
}
