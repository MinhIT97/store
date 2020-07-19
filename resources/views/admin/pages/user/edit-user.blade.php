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
    @if (session('sucsess'))
    <div class="alert alert-success">
        {{ session('sucsess') }}
    </div>
    @endif
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
                        <p class="help text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="{{$user->username}}">
                    </div> -->
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" value="{{$user->email}}">
                        <p class="help text-danger mt-2">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="Phone" value="{{$user->phone}}">
                        <p class="help text-danger mt-2">{{ $errors->first('phone') }}</p>
                    </div>
                    <div class="form-group ">
                        <input type="hidden" class="form-control" name="role_ids" id="ids" value="">
                    </div>
                    <div class="form-group">
                        <label for="brands">Status</label>
                        <select name="status" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            <option value="0" @if($user->status === 0) selected="selected"@endif>not safe</option>
                            <option value="1" @if($user->status === 1)selected="selected"@endif> Active</option>
                            <option value="2" @if($user->status === 2)selected="selected"@endif>Banned</option>
                        </select>
                    </div>
                    @can('viewAny', App\User::class)
                    <div class="form-group ">
                        <input class="form-control" placeholder="level" name="level" id="level" value="{{$user->level}}">
                        <span class="mt-2"> Number. 1 will be able to access the system</span>
                    </div>
                    <div class="form-group">
                        <label for="roles">Roles</label>
                        <select id="categories" class="form-control form-control-sm  js-example-basic-multiple" multiple="multiple">
                            @foreach($roles as $role)
                            <option value="{{$role->id}}" @if(in_array($role->id, $role_ids))selected="selected"@endif>{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endcan
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
