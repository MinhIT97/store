@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item  text-capitalize"><a href="{{route('orders.show')}}" class="text-decoration-none">Orders </a></li>
            <li class="breadcrumb-item active text-capitalize">Order</li>
        </ol>
    </div>
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{ session('sucsess') }}
            </div>
            @endif
            @if (session('errow'))
            <div class="alert alert-errow">
                {{ session('errow') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/edit-orders/'.$orders->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="title" class="form-control form-control-sm" id="name" value="{{$orders->name}}" placeholder="">
                        <p class="help is-danger mt-2">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Email</label>
                        <input type="text" name="email" class="form-control form-control-sm" id="email" value="{{$orders->email}}">
                        <p class="help is-danger mt-2">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Phone</label>
                        <input type="text" name="phone" class="form-control form-control-sm" id="phone" value="{{$orders->phone}}">
                        <p class="help is-danger mt-2">{{ $errors->first('phone') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Address</label>
                        <input type="text" name="address" class="form-control form-control-sm" id="address_price" value="{{$orders->address}}">
                        <p class="help is-danger mt-2">{{ $errors->first('address') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Total</label>
                        <input type="text" name="total_price" class="form-control form-control-sm" id="total_price" value="{{$orders->total_price}}">
                        <p class="help is-danger mt-2">{{ $errors->first('total') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="brands">Status</label>
                        <select name="status" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            <option @if($orders->status === 0) selected @endif value="0">Pending</option>
                            <option @if($orders->status === 1) selected @endif value="1">Canceled</option>
                            <option @if($orders->status === 2) selected @endif value="2">Return</option>
                            <option @if($orders->status === 3) selected @endif value="3">Finish</option>
                            <option @if($orders->status === 4) selected @endif value="4">Fake order</option>
                            <option @if($orders->status === 5) selected @endif value="5">Fail</option>
                            <option @if($orders->status === 6) selected @endif value="6">Refuse</option>
                            <option @if($orders->status === 7) selected @endif value="7">Transport</option>
                            <option @if($orders->status === 8) selected @endif value="8">Prosessing</option>
                            <option @if($orders->status === 9) selected @endif value="9">Prosessed</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>

                    <textarea name="note" class="form-control mb-4" id="" cols="30" rows="10"></textarea>

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
