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
                <form class="pt-3" method="POST" action="{{url('adminstore/products/edit/'.$product->id )}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" id="" class="js-example-basic-multiple form-control form-control-sm">
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                            <option value="accessories">Accessories</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control form-control-lg" id="name" value="{{$product->name}}">
                        <p class="help is-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="code">Mã code</label>
                        <input type="text" name="code" class="form-control form-control-lg" id="code" value="{{$product->code}}">
                        <p class="help is-danger mt-2">{{ $errors->first('code') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Số lượng</label>
                        <input type="text" name="quantity" class="form-control form-control-lg" id="quantity" value="{{$product->quantity}}">
                        <p class="help is-danger mt-2">{{ $errors->first('quantity') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="brands">Brand</label>
                        <select name="brand_id" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('brand_id') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        @php
                        $cate = [];
                        foreach($product->categories as $product_category)
                        {
                        array_push($cate,$product_category->id);
                        }
                        $size_id = [];
                        foreach($product->sizes as $product_size)
                        {
                        array_push($size_id,$product_size->id);
                        }
                        @endphp
                        <div class="form-group ">
                            <input type="hidden" class="form-control " name="categories" id="ids" value="">
                        </div>
                        <select  id="categories" class="form-control form-control-sm js-example-basic-multiple" multiple="multiple">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if(in_array($category->id,$cate))selected="selected"@endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input type="hidden" class="form-control " name="sizes" id="id_sizes" value="">
                        <select id="sizes" class="form-control form-control-sm js-example-basic-multiple" multiple="multiple">
                            @foreach($sizes as $size)
                            <option value="{{$size->id}}" @if(in_array($size->id,$size_id))selected="selected"@endif >{{$size->size}}</option>
                            @endforeach
                            <p class="help is-danger mt-2">{{ $errors->first('size') }}</p>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control-file" name="thumbnail" id="" placeholder="" aria-describedby="fileHelpId">
                        <p class="help is-danger mt-2">{{ $errors->first('thumbnail') }}</p>
                    </div>
                    <div>
                        <img class="ml-2 img-fluid" src="{{asset('/uploads/'.$product->thumbnail)}}" alt="">
                    </div>
                    <div class="form-group mt-4">
                        <label for="price">Giá</label>
                        <input type="price" name="price" class="form-control form-control-lg" id="price" value="{{$product->price}}">
                        <p class="help is-danger mt-2">{{ $errors->first('price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Giá giảm</label>
                        <input type="sale_price" name="sale_price" class="form-control form-control-lg" id="sale_price" value="{{$product->sale_price}}">
                        <p class="help is-danger mt-2">{{ $errors->first('sale_price') }}</p>
                    </div>
                    <div class="form-group">
                        <Label> Trạng thái</Label>
                        <input type="status" name="status" class="form-control form-control-lg" id="status" value="{{$product->status}}">
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="submit" id="btn-submit" class="btn btn-behance justify-content-end">Update</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
