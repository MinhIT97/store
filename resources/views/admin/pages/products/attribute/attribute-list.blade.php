@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
                <li class="breadcrumb-item"><a href="{{route('products')}}" class="text-decoration-none">Products</a></li>
                <li class="breadcrumb-item  text-capitalize"><a href="{{ url('adminstore/products/'.$product->type)}}" class="text-decoration-none">Products {{$product->type}}</a></li>
                <li class="breadcrumb-item active text-capitalize"> Atribute</li>
            </ol>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('products.create')}}" class="text-decoration-none">CREATE NEW PODUCTS</a></li>
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
                        @if (session('errow'))
                        <div class="alert alert-danger">
                            {{ session('errow') }}
                        </div>
                        @endif
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Màu </th>
                                    <th> Size </th>
                                    <th> Quantity </th>
                                    <th> Current quantity </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($attributes->count())
                                @foreach($attributes as $attribute)
                                <tr>
                                    <td> {{$attribute->id}}</td>
                                    <td> {{$attribute->color->color}} </td>
                                    <td> {{$attribute->size->size}} </td>
                                    <td> {{$attribute->quantity}} </td>
                                    <td> {{$attribute->current_quantity}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/products/edit/'.$attribute->id )}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/products/delete/attribute/'.$attribute->id )}}"><i class="fas fa-trash"></i></a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection