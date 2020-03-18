@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{ route('create-product') }}" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('type') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control form-control-lg" id="name" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="code">Mã code</label>
                        <input type="text" name="code" class="form-control form-control-lg" id="code" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('code') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Số lượng</label>
                        <input type="text" name="quantity" class="form-control form-control-lg" id="quantity" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('quantity') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="price" name="price" class="form-control form-control-lg" id="price" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Giá giảm</label>
                        <input type="sale_price" name="sale_price" class="form-control form-control-lg" id="sale_price" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('sale_price') }}</p>
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" class="form-control-file" name="thumbnail" id="" placeholder="" aria-describedby="fileHelpId">

                    </div>
<div>
<p class="help is-danger mt-2">{{ $errors->first('thumbnail') }}</p>
</div>

                    <div class="form-group">
                        <Label> Trạng thái</Label>
                        <input type="status" name="status" class="form-control form-control-lg" id="status" value="">
                        <p class="help is-danger mt-2">{{ $errors->first('status') }}</p>
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
