@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left p-5" style="background-image:url({{asset('/uploads/'.$user->avatar)}});background-size: 100% 100%;">
                <form class="pt-3" method="POST" action="{{url('adminstore/update-user/'.$user->id )}}" enctype="multipart/form-data">
                    <div class="upload-avatar">
                        <div class="container">
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
                        <input style="opacity: 0.6; background-color: white" type="text" name="name" class="form-control form-control-lg" id="exampleInputName" value="{{$user->name}}">
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="{{$user->username}}">
                    </div> -->
                    <div class="form-group">
                        <input style="opacity: 0.6; background-color: white" type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <input style="opacity: 0.6; background-color: white" type="text" class="form-control" name="phone" id="Phone" value="{{$user->phone}}">
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
