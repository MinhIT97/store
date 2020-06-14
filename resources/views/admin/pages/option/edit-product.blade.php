@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper align-items-center  d-flex auth">
    <div class="row flex-grow">
        <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left p-5">
                <form class="pt-3" method="POST" action="{{url('adminstore/update-user/'.$product->id )}}">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type" value="{{$product->type}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control form-control-lg" id="name" value="{{$product->name}}">
                    </div>
                    <div class="form-group">
                        <label for="code">Mã code</label>
                        <input type="text" name="code" class="form-control form-control-lg" id="code" value="{{$product->code}}">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Số lượng</label>
                        <input type="text" name="quantity" class="form-control form-control-lg" id="quantity" value="{{$product->quantity}}">
                    </div>
                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="price" name="price" class="form-control form-control-lg" id="price" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Giá giảm</label>
                        <input type="sale_price" name="sale_price" class="form-control form-control-lg" id="sale_price" value="{{$product->sale_price}}">
                    </div>
                    <div class="form-group">
                        <Label> Trạng thái</Label>
                        <input type="status" name="status" class="form-control form-control-lg" id="status" value="{{$product->status}}">
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
