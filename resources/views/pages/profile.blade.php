@extends('layout.master')
@section('content')
<section class="profile">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4 mb-4">
                <div class="card">
                    <div class="card-header">Information</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('profile.edit')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="upload-avatar">

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
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="profileEmail" aria-describedby="emailHelp" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" name="name" class="form-control" id="profileName" value="{{$user->name}}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="inputEmail4" value="{{$user->phone}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birthday">Date of birth</label>
                                    <input type="date" name="birthday" class="form-control" id="birthday" value="Password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-infomation">Edit</button>
                                <a class="btn-change-password" href="{{route('password.update')}}">Change Password</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection