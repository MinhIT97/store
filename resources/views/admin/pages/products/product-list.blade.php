@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">

                @if(Route::has('product-accessories'))
                Phụ kiện
                @elseif(Route::has('product-man'))
                Sản phẩm nam
                @endif


            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('create-product')}}" class="text-decoration-none">Thêm mới</a></li>
                    <!-- <li class="breadcrumb-item active" aria-cur'rent="page">Basic tables</li> -->
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Ảnh </th>
                                    <th> Name </th>
                                    <th> Số lượng </th>
                                    <th> Giá </th>
                                    <th> Trạng thái </th>
                                    <th> Ngày tạo </th>
                                    <th>Hành động </th>


                                </tr>
                            </thead>
                            <tbody>
                                @if($products->count())
                                @foreach($products as $product)
                                <tr>
                                    <td> {{$product->id}}</td>
                                    <td> <img src="/images/{{$product->thumbnail}}" alt=""> </td>
                                    <td> {{$product->name}} </td>
                                    <td> {{$product->quantity}} </td>
                                    <td> {{$product->price}} </td>
                                    <td> @if($product->status === 0)
                                        Mới nhập
                                        @elseif($product->status === 1)
                                        Đang bán
                                        @else
                                        Dừng bán
                                        @endif
                                    </td>
                                    <td>{{$product->getDate()}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/edit-product/'.$product->id )}}">Sửa</a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="">Xóa</a>

                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div>
                                    <p>Chưa có sản phẩm</p>
                                </div>
                                @endif


                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
