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
                <form class="pt-3" method="POST" action="{{ route('brand.create') }}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Brand</label>
                        <input type="text" class="form-control" name="name" id="type" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('brand') }}</p>
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="submit" class="btn btn-behance justify-content-end">create</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
