<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Repositories\PostRepository;

class BlogController extends Controller
{
    protected $repository;
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }
    public function index()
    {
        $blogs = $this->entity->get();
        return view('admin.pages.blogs.blog-list', [
            'blogs' => $blogs,
        ]);
    }

    public function viewStore()
    {
        return view('admin.pages.blogs.create-blog');
    }

    public function store(BlogCreateRequest $request)
    {
        if ($request->hasFile('thumbnail')) {
            $request->thumbnail->move(base_path('/public/uploads'), $request->thumbnail->getClientOriginalName());
            $data              = $request->all();
            $data['thumbnail'] = $request->thumbnail->getClientOriginalName();
        } else {
            $data = $request->all();
        }

        $blog = $this->entity->create($data);

        if ($blog) {
            return redirect()->back()->with('sucsess', 'Thêm blog thành công');
        }
        return redirect()->back()->with('errow', 'Thêm blog thất bại');
    }

    public function viewUpdate($id)
    {
        $blog = $this->entity->find($id);

        return view('admin.pages.blogs.edit-blog', [
            'blog' => $blog,
        ]);
    }

    public function update()
    {
    }

    public function destroy($id)
    {
        $blog = $this->entity->find($id);
        if (!$blog) {
            return view('admin.pages.samples.error-404');
        }

        $blog->delete();

        return redirect()->back()->with('sucsess', 'Xóa blog thành công');
    }
}
