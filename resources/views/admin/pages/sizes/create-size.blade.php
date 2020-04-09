@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{ session('sucsess') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{ route('size.create') }}">
                    <div class="form-group">
                        <label for="title">Size</label>
                        <input type="text" name="size" class="form-control form-control-sm" id="name" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('size') }}</p>
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
