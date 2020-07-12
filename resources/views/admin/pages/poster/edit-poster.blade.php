@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i>Dashboard </a></li>
            <li class="breadcrumb-item  text-capitalize"><a href="{{route('posters.show')}}" class="text-decoration-none">poster </a></li>
            <li class="breadcrumb-item active text-capitalize"> {{$poster->title}}</li>
        </ol>
    </div>
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
                        <select name="type" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            <option selected value="{{$poster->type}}">{{$poster->type}}</option>
                            <option value="home">Home</option>
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                            <option value="accessories">accessories</option>
                            <option value="blog">blog</option>
                            <option value="newsesion">New Session</option>
                        </select>
                    </div>
                    <div class="upload-product">
                        <label for="">Images</label>
                        <div class="product-upload">
                            <div class="product-edit">
                                <input type='file' name="thumbnail" aria-describedby="fileHelpId" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="product-preview">
                                <div class="imagePreview" id="imagePreview" style="background-image:url({{$poster->thumbnail}})">
                                </div>
                            </div>
                        </div>
                        <p class="help is-danger mt-2">{{ $errors->first('thumbnail') }}</p>
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
                        <button type="submit" class="btn  btn-gradient-info btn-behance justify-content-end">Edit</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
