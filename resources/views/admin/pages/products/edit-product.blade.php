@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center auth">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('products')}}" class="text-decoration-none">Products</a></li>
            <li class="breadcrumb-item  text-capitalize"><a href="{{ url('adminstore/products/'.$product->type)}}" class="text-decoration-none">Products {{$product->type}}</a></li>
            <li class="breadcrumb-item active text-capitalize"> {{$product->type}}</li>
        </ol>
    </div>
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
                            <option value="men" @if($product->type ==="men")selected="selected"@endif >Men</option>
                            <option value="women" @if($product->type ==="women")selected="selected"@endif>Women</option>
                            <option value="accessories " @if($product->type === "accessories")selected="selected"@endif>Accessories</option>
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
                        <label for="quantity">Current quantity</label>
                        <input type="text" name="current_quantity" class="form-control form-control-sm" id="current_quantity" value="{{$product->current_quantity}}">
                        <p class="help is-danger mt-2">{{ $errors->first('current_quantity') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
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
                        <select id="categories" class="form-control form-control-sm js-example-basic-multiple" multiple="multiple">
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
                    <div class="form-group ">
                        <label>Nội dung</label>
                        <textarea name="content" class="form-control " id="editor1">{!!$product->content!!}</textarea>
                        <p class="help is-danger mt-2">{{ $errors->first('content') }}</p>
                    </div>
                    <div class="upload-product">
                        <label for="">Thumbnail</label>
                        <div class="product-upload">
                            <div class="product-edit">
                                <input type='file' name="thumbnail" aria-describedby="fileHelpId" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="product-preview">
                                <div id="imagePreview" style="background-image:url({{$product->thumbnail}})">
                                </div>
                            </div>
                        </div>
                        <p class="help is-danger mt-2">{{ $errors->first('thumbnail') }}</p>
                    </div>

                    <p style="margin-bottom:25px">Medias: <span class="imupl-files-current"></span>/<span class="imupl-files-max"></span> <button style="float:right" class="btn btn-primary imupl-button-choose"><i class="fa fa-upload"></i> Upload</button></p>
                    <div class="imupl-files-list">

                    </div>
                    <input type="file" name="media[]" multiple class="imupl-fileinput" />
                    <div class="imupl-edit-overlay">
                        <div class="thumbnail">
                            <div class="imupl-crop-wrapper">
                                <div class="imupl-cropper">
                                    <div class="imupl-cropper-start"></div>
                                    <div class="imupl-cropper-end"></div>
                                </div>
                                <div class="img"></div>
                            </div>
                            <p>
                                <input value="ok" class="btn btn-primary imupl-button-edit-save" style="float:right">OK</input>
                            </p>
                        </div>
                    </div>
                    <div class="imupl-dragdrop-hover"></div>
                    <div class="medias">
                        <div class="row">
                            @if($product->imagaes->count())
                            @foreach($product->imagaes as $media)
                            <div class="col-4 mt-2">
                                <img class="ml-2 img-fluid img-medias" src="{{$media->url}}" alt="">

                                <a class="btn btn-gradient-danger p-0 ml-0 btn-delete_medias" href="{{ url('adminstore/products/delete/'.$product->id.'/medias/'.$media->id )}}"><i class="mdi mdi-delete-forever"></i></a>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>


                    <div class="form-group mt-4">
                        <label for="price">Price</label>
                        <input type="price" name="price" class="form-control form-control-lg" id="price" value="{{$product->price}}">
                        <p class="help is-danger mt-2">{{ $errors->first('price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Sale price</label>
                        <input type="sale_price" name="sale_price" class="form-control form-control-lg" id="sale_price" value="{{$product->sale_price}}">
                        <p class="help is-danger mt-2">{{ $errors->first('sale_price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="original_price">Original price</label>
                        <input type="original_price" name="original_price" class="form-control form-control-lg" id="sale_price" value="{{$product->original_price}}">
                        <p class="help is-danger mt-2">{{ $errors->first('sale_price') }}</p>
                    </div>
                    <div class="form-group mt-5">
                        <Label> Turn on or Turn off sale price</Label>
                        <select name="sale" id="sale_price_on_off" class="form-control form-control-sm js-example-basic-single">
                            <option value="0" @if($product->sale ===0)selected="selected"@endif >Turn off price</option>
                            <option value="1" @if($product->sale ===1)selected="selected"@endif>Turn on price</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('sale') }}</p>
                    </div>
                    <div class="form-group mt-5">
                        <Label> Status</Label>
                        <select name="status" id="" class="form-control form-control-sm js-example-basic-multiple">
                            <option value="0" @if($product->status ===0)selected="selected"@endif >pending</option>
                            <option value="1" @if($product->status ===1)selected="selected"@endif >active</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>
                    <input type="checkbox" @if($product->hot === 1) checked @endif name="hot" value="1">
                    <label for="">Hot</label>
                    <div class="justify-content-end d-flex">
                        <button type="submit" id="btn-submit" class="btn btn-gradient-info btn-behance justify-content-end">Update</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
