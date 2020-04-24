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
                <form class="pt-3" id="test" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" id="" class="js-example-basic-multiple form-control form-control-lg">
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                            <option value="accessories">Accessories</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="name" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="brands">Brand</label>
                        <select name="brand_id" id="select1" class="form-control form-control-sm  js-example-basic-single">
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group ">
                        <input type="hidden" class="form-control " name="categories" id="ids" value="">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="categories" class=" categories form-control form-control-sm js-example-basic-multiple" multiple="multiple">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('categories') }}</p>
                    </div>

                    <div class="form-group">
                        <label for="size">size</label>
                        <input type="hidden" class="form-control " name="sizes" id="id_sizes" value="">
                        <select id="sizes" class="form-control form-control-sm js-example-basic-multiple" multiple="multiple">
                            @foreach($sizes as $size)
                            <option value="{{$size->id}}">{{$size->size}}</option>
                            @endforeach
                            <p class="help is-danger mt-2">{{ $errors->first('size') }}</p>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" name="code" class="form-control form-control-sm" id="code" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('code') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control form-control-sm" id="quantity" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('quantity') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="price" name="price" class="form-control form-control-sm" id="price" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Sale price</label>
                        <input type="sale_price" name="sale_price" class="form-control form-control-sm" id="sale_price" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('sale_price') }}</p>
                    </div>

                    <div class="upload-product">
                        <label for="">Thumbnail</label>
                        <div class="product-upload">
                            <div class="product-edit">
                                <input type='file' name="thumbnail" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="product-preview">
                                <div id="imagePreview">
                                </div>
                            </div>
                        </div>
                        <p class="help is-danger mt-2">{{ $errors->first('thumbnail') }}</p>
                    </div>

                    <div class="form-group ">
                        <label>Nội dung</label>
                        <textarea name="content" class="form-control " id="editor1"></textarea>
                        <p class="help is-danger mt-2">{{ $errors->first('content') }}</p>
                    </div>
                    <p style="margin-bottom:25px">Medias: <span class="imupl-files-current"></span>/<span class="imupl-files-max"></span> <button style="float:right" class="btn btn-primary imupl-button-choose"><i class="fa fa-upload"></i> Upload</button></p>
                    <div class="imupl-files-list"></div>
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

                    <div class="form-group mt-5">
                        <Label> Status</Label>
                        <select name="status" id="" class="form-control form-control-sm">
                            <option value="0">pending</option>
                            <option value="1">active</option>
                        </select>
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
                    </div>

                    <input type="checkbox" name="hot" value="1">
                    <label for="">Hot</label>

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
