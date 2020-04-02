@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{ session('sucsess') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{ route('blog-create') }}" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <label for="thumbnail">Hình ảnh</label>
                        <input id="my-input" class="form-control-file" type="file" name="thumbnail">
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
