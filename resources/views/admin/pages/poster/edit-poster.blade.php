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
            @if (session('errow'))
            <div class="alert alert-errow">
                {{ session('errow') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/poster-edit/'.$poster->id)}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control form-control-sm" id="name" value="{{$poster->title}}" placeholder="">
                        <p class="help is-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control form-control-sm" id="name" value="{{$poster->link}}">
                        <p class="help is-danger mt-2">{{ $errors->first('link') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="type">type</label>
                        <input type="text" name="type" class="form-control form-control-sm" id="name" value="{{$poster->type}}">
                        <p class="help is-danger mt-2">{{ $errors->first('type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="">Thumbnail</label>
                        <input type="file" class="form-control-file" name="thumbnail" id="" placeholder="" aria-describedby="fileHelpId">

                    </div>
                    <div>
                        <img class="ml-2 img-fluid" src="{{asset('/uploads/'.$poster->thumbnail)}}" alt="">
                    </div>
                    <div class="form-group mt-4">
                        <Label> Trạng thái</Label>
                        <select name="status" id="" class="form-control form-control-sm">
                            <option value="1">Active</option>
                            <option value="0">Pending</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="submit" class="btn btn-behance justify-content-end">Edit</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
