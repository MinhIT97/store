@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center   auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item  text-capitalize"><a href="{{route('users.show')}}" class="text-decoration-none">Users </a></li>
            <li class="breadcrumb-item active text-capitalize"> {{$user->name}}</li>
        </ol>
    </div>
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/update-user/'.$user->id )}}" enctype="multipart/form-data">
                    <div class="upload-avatar">
                        <div class="container">
                            <h1>
                                Avartar upload
                            </h1>
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div class="imagePreview" id="imagePreview" style="background-image:url({{asset('/uploads/'.$user->avatar)}})">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg" id="exampleInputName" value="{{$user->name}}">
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="{{$user->username}}">
                    </div> -->
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="Phone" value="{{$user->phone}}">
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="submit" class="btn btn-gradient-info btn-behance justify-content-end">Update</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
