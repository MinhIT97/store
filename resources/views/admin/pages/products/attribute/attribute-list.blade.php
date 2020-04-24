@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Attribute
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
                                    <th> Màu </th>
                                    <th> Số lượng </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($attributes->count())
                                @foreach($attributes as $attribute)
                                <tr>
                                    <td> {{$attribute->id}}</td>
                                    <td> {{$attribute->color->color}} </td>
                                    <td> {{$attribute->quantity}} </td>
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
