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
                <form class="pt-3" method="POST" action="{{route('discount.create')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" name="code" id="code" value="">
                        <p class="help text-danger mt-2">{{ $errors->first('code') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="percent">Percent</label>
                        <input type="text" name="percent" class="form-control form-control-sm" id="percent" value="">
                        <p class="help text-danger mt-2">{{ $errors->first('percent') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="star_date">Star date</label>
                        <input type="date" name="star_date" class="form-control form-control-sm" id="star_date" value="">
                        <p class="help text-danger mt-2">{{ $errors->first('percent') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End date</label>
                        <input type="date" name="end_date" class="form-control form-control-sm" id="end_date" value="">
                        <p class="help text-danger mt-2">{{ $errors->first('percent') }}</p>
                    </div>
                    <div class="form-group">
                        <select name="status" class="js-example-basic-single form-control form-control-sm" id="status">
                            <option value="1">Active</option>
                            <option value="0">Pending</option>
                        </select>
                        <p class="help text-danger mt-2">{{ $errors->first('status') }}</p>
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
