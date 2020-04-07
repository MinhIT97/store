<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
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
            $data['type']      = 'blog';
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

    public function update(BlogUpdateRequest $request, $id)
    {
        $blog = $this->entity->find($id);
        if ($request->hasFile('thumbnail')) {
            $request->thumbnail->move(base_path('/public/uploads'), $request->thumbnail->getClientOriginalName());
            $data              = $request->all();
            $data['thumbnail'] = $request->thumbnail->getClientOriginalName();
            $data['type']      = 'blog';
        } else {
            $data = $request->all();
        }

        if ($blog) {
            $update = $blog->update($data);

            if ($update) {
                return redirect()->back()->with('sucsess', 'Update blog thành công');
            }

        }
        return redirect()->back()->with('errow', 'Update Fail');
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