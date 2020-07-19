@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center   auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('contact.show')}}" class="text-decoration-none">Contacts</a></li>
            <li class="breadcrumb-item  text-capitalize">{{$contact->name}}</li>

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
                <form class="pt-3" method="POST" action="{{url('adminstore/contacts/'.$contact->id )}}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" id="name" value="{{$contact->name}}">
                        <p class="help is-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control form-control-lg" id="email" value="{{$contact->email}}">
                        <p class="help is-danger mt-2">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="status">Satus</label>
                        <select name="status" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            <option @if($contact->status === 0) selected="selected" @endif value="0">Pending</option>
                            <option @if($contact->status === 1) selected="selected" @endif value="1">Processed</option>
                        </select>
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