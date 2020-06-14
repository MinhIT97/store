@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center   auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item  text-capitalize"><a href="{{route('blog.show')}}" class="text-decoration-none">Blogs </a></li>
        </ol>
    </div>
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{ session('sucsess') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{ route('blog.create') }}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" class="form-control form-control-sm" id="name" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" name="description" class="form-control form-control-sm" id="name" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('description') }}</p>
                    </div>
                    <div class="form-group ">
                        <label>Nội dung</label>
                        <textarea name="content" class="form-control " id="editor1"></textarea>
                    </div>
                    <div class="upload-product">
                        <label for="">Thumbnail</label>
                        <div class="product-upload">
                            <div class="product-edit">
                                <input type='file' name="thumbnail" aria-describedby="fileHelpId" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="product-preview">
                                <div id="imagePreview">
                                </div>
                            </div>
                        </div>
                        <p class="help is-danger mt-2">{{ $errors->first('thumbnail') }}</p>
                    </div>
                    <div class="form-group">
                        <Label> Trạng thái</Label>
                        <select name="status" id="" class="form-control form-control-sm">
                            <option value="1">Active</option>
                            <option value="0">Pending</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="submit" class="btn btn-behance justify-content-end">Create</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
