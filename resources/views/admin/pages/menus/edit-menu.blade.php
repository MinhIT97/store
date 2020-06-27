@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center   auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('menus')}}" class="text-decoration-none">Menus</a></li>
            <li class="breadcrumb-item active text-capitalize"> {{$menu->label}}</li>
        </ol>
    </div>
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{ session('sucsess') }}
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/menus-edit/'.$menu->id )}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="label">Label</label>
                        <input type="text" name="label" class="form-control form-control-sm" id="label" value="{{$menu->label}}">
                        <p class="help text-danger mt-2">{{ $errors->first('label') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control form-control-sm" id="link" value="{{$menu->link}}">
                        <p class="help  text-danger mt-2">{{ $errors->first('link') }}</p>
                    </div>

                    <div class="form-group">
                        <Label> Parent</Label>
                        <select name="parent_id" id="" class="form-control form-control-sm js-example-basic-single">
                            <option value="0">Is parent</option>

                            @foreach($menus as $menuParent)
                            <option @if($menu->parent_id === $menuParent->id)selected="selected" @endif value="{{$menuParent->id}}">{{$menuParent->label}}</option>
                            @endforeach

                        </select>
                        <p class="help text-danger mt-2">{{ $errors->first('parent_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="order_by">Order by</label>
                        <input type="text" name="order_by" class="form-control form-control-sm" id="order_by" value="{{$menu->order_by}}">
                        <p class="help text-danger mt-2">{{ $errors->first('order_by') }}</p>
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
