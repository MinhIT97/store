<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Repositories\PostRepository;
use App\Services\ImageUploadService;
use App\Traits\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    use Search;
    protected $repository;
    protected $imageUploadService;
    public function __construct(PostRepository $repository, ImageUploadService $imageUploadService)
    {
        $this->repository         = $repository;
        $this->entity             = $repository->getEntity();
        $this->imageUploadService = $imageUploadService;
    }
    public function index(Request $request)
    {

        $query = $this->entity->query();
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['title'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $blogs = $query->where('type', 'blogs')->paginate(15);

        $blogs->setPath(url()->current() . '?search=' . $request->get('search'));

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
        $user_id = Auth::user()->id;
        if ($request->hasFile('thumbnail')) {
            $link              = $this->imageUploadService->handleUploadedImage($request->file('thumbnail'));
            $data              = $request->all();
            $data['thumbnail'] = $link;
            $data['type']      = 'blogs';
            $data['user_id']   = $user_id;
        } else {
            $data            = $request->all();
            $data['user_id'] = $user_id;
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

        $this->authorize('view', $blog);

        return view('admin.pages.blogs.edit-blog', [
            'blog' => $blog,
        ]);
    }

    public function update(BlogUpdateRequest $request, $id)
    {
        $blog = $this->entity->find($id);
        $this->authorize('view', $blog);
        if ($request->hasFile('thumbnail')) {
            $link              = $this->imageUploadService->handleUploadedImage($request->file('thumbnail'));
            $data              = $request->all();
            $data['thumbnail'] = $link;
            $data['type']      = 'blogs';
        } else {
            $data = $request->all();
        }

        if ($blog) {
            $blog->slug = null;
            $update     = $blog->update($data);
            if ($update) {
                return redirect()->route('blog.show')->with('sucsess', 'Update blog thành công');
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
