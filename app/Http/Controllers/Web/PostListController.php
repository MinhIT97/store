<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostListController extends Controller
{
    protected $repository;
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }


    protected function viewPages()
    {
        return 'pages.pages';
    }


    protected function viewDataPages()
    {

        $blogs = $this->entity->where('id', 1)->firstOrFail();


        return [
            'blogs' => $blogs
        ];
    }


    public function show(Request $request)
    {
        if (method_exists($this, 'beforeQuery')) {
            $this->beforeQuery($request);
        }
        $type = $this->getTypePost($request);

        $post = $this->entity->where([['slug', '=',  $request->slug], ['type', '=', $type]])->firstOrFail();

        $custom_view_func_name = 'viewData' . ucwords($type);

        if (method_exists($this, $custom_view_func_name)) {
            $custom_view_data = $this->$custom_view_func_name($post, $request);
        }
        $data = $custom_view_data;



        $key = 'view' . ucwords($type);

        if (method_exists($this, $key)) {
            return view($this->$key(), $data);
        }
    }

    public function getTypePost(Request $request)
    {

        $model =   new Post;
        $postTypes = $model->postTypes();
        $path_items = collect(explode('/', $request->path()));

        foreach ($postTypes as $value) {
            foreach ($path_items as $item) {
                if ($value === $item) {
                    $type = $value;
                }
            }
        }
        return $type;
    }

}
