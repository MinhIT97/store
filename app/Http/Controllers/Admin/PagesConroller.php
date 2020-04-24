<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagesCreateRequest;
use App\Http\Requests\PagesUpdateRequest;
use App\Repositories\PostRepository;

class PagesConroller extends Controller
{
    protected $repository;
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }
    public function index()
    {
        $pages = $this->entity->where('type', 'pages')->paginate(15);
        return view('admin.pages.pages.pages-list', [
            'pages' => $pages,
        ]);
    }

    public function viewStore()
    {
        return view('admin.pages.pages.create-pages');
    }

    public function store(PagesCreateRequest $request)
    {
        $data              = $request->all();
        $data['type']      = 'pages';
        $data['thumbnail'] = 0;

        $blog = $this->entity->create($data);

        if ($blog) {
            return redirect()->back()->with('sucsess', 'Thêm blog thành công');
        }
        return redirect()->back()->with('errow', 'Thêm blog thất bại');
    }

    public function viewUpdate($id)
    {
        $pages = $this->entity->find($id);

        return view('admin.pages.pages.edit-pages', [
            'pages' => $pages,
        ]);
    }

    public function update(PagesUpdateRequest $request, $id)
    {
        $blog = $this->entity->find($id);

        $data         = $request->all();
        $data['type'] = 'pages';

        if ($blog) {
            $blog->slug = null;
            $update     = $blog->update($data);
            if ($update) {
                return redirect()->route('pages.show')->with('sucsess', 'Update blog thành công');
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
