@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item  text-capitalize"><a href="{{route('orders.show')}}" class="text-decoration-none">Orders </a></li>
            <li class="breadcrumb-item active text-capitalize">Create Orders</li>
        </ol>
    </div>
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{ session('sucsess') }}
            </div>
            @elseif(session('error'))
            <div class="alert text-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" id="test" method="POST" action="{{route('orders.create')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Users</label>
                        <select name="user_id" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <p class="help  text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="name" value="">
                        <p class="help  text-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control form-control-sm" id="email" value="">
                        <p class="help  text-danger mt-2">{{ $errors->first('Email') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="text" name="phone" class="form-control form-control-sm" id="phone" value="">
                        <p class="help  text-danger mt-2">{{ $errors->first('phone') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control form-control-sm" id="address" value="">
                        <p class="help  text-danger mt-2">{{ $errors->first('address') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea name="note" id="note" cols="30" rows="10"></textarea>
                        <p class="help  text-danger mt-2">{{ $errors->first('note') }}</p>
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="submit" id="btn-submit" class="btn btn-gradient-info btn-behance justify-content-end">Create</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
