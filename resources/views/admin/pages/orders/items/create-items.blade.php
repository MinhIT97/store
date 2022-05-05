@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-cente auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('orders.show')}}" class="text-decoration-none">Orders</a></li>

            <li class="breadcrumb-item active text-capitalize"> Item</li>
        </ol>
    </div>

    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{ session('sucsess') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/orders/'.$order->id.'/items')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="quantity">Product</label>
                        <select name="product_id" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control form-control-lg" id="quantity" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('quantity') }}</p>
                    </div>
                    <div class="form-group">
                        <select name="color_id" id="select2" class="form-control form-control-sm  js-example-basic-single">
                            @foreach($colors as $color)
                            <option value="{{$color->id}}">{{$color->color}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="size_id" id="select3" class="form-control form-control-sm  js-example-basic-single">
                            @foreach($sizes as $size)
                            <option value="{{$size->id}}">{{$size->size}}</option>
                            @endforeach
                        </select>
                    </div>


            </div>
            <div class="justify-content-end d-flex">
                <button type="submit" id="btn-submit" class="btn btn-behance justify-content-end">ADD</button>
            </div>

            @csrf
            </form>
        </div>
    </div>
</div>
</div>
@endsection
