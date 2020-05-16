@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-cente auth">
    <div>
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
                <li class="breadcrumb-item"><a href="{{route('products')}}" class="text-decoration-none">Products</a></li>
                <li class="breadcrumb-item  text-capitalize"><a href="{{ url('adminstore/products/'.$product->type)}}" class="text-decoration-none">Products {{$product->type}}</a></li>
                <li class="breadcrumb-item active text-capitalize"> Atribute</li>
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
            <div class="alert alert-danger">
                {{ session('errow') }}
            </div>
            @endif
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/products/'.$product->id.'/attribute')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        {{$product->name}}
                        <input type="text" hidden value="{{$product->id}}" name="product_id">
                    </div>
                    @php
                    $color_id = [];
                    foreach($product->attributes as $attribute)
                    {
                    array_push($color_id,$attribute->color_id);
                    }
                    @endphp
                    <div class="form-group">
                        <label for="color_id">Color</label>
                        <select name="color_id" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            @foreach($colors as $color)
                            <option value="{{$color->id}}" @if(in_array($color->id,$color_id))disabled="disabled"@endif>{{$color->color}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control form-control-lg" id="quantity" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('quantity') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="current_quantity">Current quantity</label>
                        <input type="text" name="current_quantity" class="form-control form-control-lg" id="current_quantity" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('current_quantity') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input type="hidden" class="form-control " name="sizes" id="id_sizes" value="">
                        <select id="sizes" class="form-control form-control-sm js-example-basic-multiple" multiple="multiple">
                            @if($product->sizes->count())
                            @foreach($product->sizes as $size)
                            <option value="{{$size->id}}">{{$size->size}}</option>
                            @endforeach
                            @endif
                            <p class="help is-danger mt-2">{{ $errors->first('size') }}</p>
                        </select>
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
