@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <a href="{{route('brand.show')}}" class="text-decoration-none">Brand</a><span>:{{$brand->name}}</span>
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('create-product')}}" class="text-decoration-none">CREATE NEW</a></li>
                    <!-- <li class="breadcrumb-item active" aria-cur'rent="page">Basic tables</li> -->
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (session('sucsess'))
                        <div class="alert alert-success">
                            {{ session('sucsess') }}
                        </div>
                        @endif
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Created at </th>
                                    <th> Total products </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($brand_product->count())
                                @foreach($brand_product as $product)
                                <tr>
                                    <td> {{$product->id}}</td>
                                    <td> {{$product->name}} </td>
                                    <td>{{$product->getDate()}} </td>
                                    <td>{{$product->withCount}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/products/edit/'.$product->id )}}"><i class="mdi mdi-tooltip-edit"></i>Edit</a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/products/'.$product->id )}}"><i class="mdi mdi-delete-sweep"></i>Delete</a>
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
                        </div>
                        <div class="lion-pagination">
                            {{ $brand_product->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
