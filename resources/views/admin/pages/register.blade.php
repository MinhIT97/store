@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{ route('users.create') }}" enctype="multipart/form-data">
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
                                    <div class="imagePreview" id="imagePreview">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg" value="{{ old('name') }}" id="exampleInputName" placeholder="Name">
                        <p class="help is-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" value="{{ old('username') }}" id="exampleInputUsername1" placeholder="Username">
                        <p class="help is-danger mt-2">{{ $errors->first('username') }}</p>
                    </div> -->
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" id="exampleInputEmail1" placeholder="Email">
                        <p class="help is-danger mt-2">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="Phone" placeholder="Phone">
                        <p class="help is-danger mt-2">{{ $errors->first('phone') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                        <p class="help is-danger mt-2">{{ $errors->first('password') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="confirmpassword" id="exampleInputConfirmPassword" placeholder="Confirm Password">
                        <p class="help is-danger mt-2">{{ $errors->first('confirmpassword') }}</p>
                    </div>
                    <div class="form-group ">
                        <input type="hidden" class="form-control" name="role_ids" id="ids" value="">
                    </div>
                    @can('viewAny', App\User::class)
                    <div class="form-group">
                        <label for="roles">Roles</label>
                        <select id="categories" class="form-control form-control-sm  js-example-basic-multiple" multiple="multiple">
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endcan
                    <div class="justify-content-end d-flex">
                        <button type="submit" class="btn btn-gradient-info btn-behance justify-content-end">Create new</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
