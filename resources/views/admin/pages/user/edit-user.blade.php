@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST"  action="{{url('adminstore/update-user/'.$user->id )}}">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg" id="exampleInputName" value="{{$user->name}}">
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="{{$user->username}}">
                    </div> -->
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="Phone"  value="{{$user->phone}}">
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
