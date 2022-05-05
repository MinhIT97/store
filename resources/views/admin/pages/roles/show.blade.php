@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('roles')}}" class="text-decoration-none">Roles</a></li>
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
                <form class="pt-3" method="POST" action="{{url('adminstore/roles-update/'.$role->id)}}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$role->name}}">
                        <p class="help is-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="slug">slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="{{$role->slug}}">
                        <p class="help is-danger mt-2">{{ $errors->first('slug') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" id="description" value="{{$role->description}}">
                        <p class="help is-danger mt-2">{{ $errors->first('description') }}</p>
                    </div>
                    <div class="form-group mt-5">
                        <Label> Status</Label>
                        <select name="status" id="" class="form-control form-control-sm js-example-basic-multiple">
                            <option value="0" @if($role->status ===0)selected="selected"@endif >pending</option>
                            <option value="1" @if($role->status ===1)selected="selected"@endif >active</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="submit" class="btn btn-behance justify-content-end">Update</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
