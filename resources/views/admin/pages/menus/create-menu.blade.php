@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('menus')}}" class="text-decoration-none">Menus</a></li>
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
                <form class="pt-3" method="POST" action="{{ route('menus.create') }}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="label">Label</label>
                        <input type="text" name="label" class="form-control form-control-sm" id="label" value="">
                        <p class="help text-danger mt-2">{{ $errors->first('label') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control form-control-sm" id="link" value="">
                        <p class="help  text-danger mt-2">{{ $errors->first('link') }}</p>
                    </div>

                    <div class="form-group">
                        <Label> Parent</Label>
                        <select name="parent_id" id="" class="form-control form-control-sm js-example-basic-single">
                            <option value="0">Is parent</option>

                            @foreach($menus as $menu)
                            <option value=" {{$menu->id}}">{{$menu->label}}</option>
                            @endforeach

                        </select>
                        <p class="help text-danger mt-2">{{ $errors->first('parent_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="order_by">Order by</label>
                        <input type="text" name="order_by" class="form-control form-control-sm" id="order_by" value="">
                        <p class="help text-danger mt-2">{{ $errors->first('order_by') }}</p>
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
