@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center   auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('options.show')}}" class="text-decoration-none">Config</a></li>
            <li class="breadcrumb-item  text-capitalize">{{$option->key}}</li>

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
                <form class="pt-3" method="POST" action="{{url('adminstore/options/'.$option->id )}}">
                    <div class="form-group ">
                        <label>Value</label>
                        <textarea name="value" class="form-control " id="editor1">{!!$option->value!!}</textarea>
                        <p class="help is-danger mt-2">{{ $errors->first('value') }}</p>
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
