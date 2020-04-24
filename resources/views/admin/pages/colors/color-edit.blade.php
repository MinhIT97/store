@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/edit-color/'.$color->id )}}">
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" name="color" class="form-control form-control-lg" id="color" value="{{$color->color}}">
                        <p class="help is-danger mt-2">{{ $errors->first('color') }}</p>
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
