@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                @if(request()->is('adminstore/products/accessories'))
                ACCESSORIES
                @elseif(request()->is('adminstore/products/men'))
                MEN
                @elseif(request()->is('adminstore/products/women'))
                WOMEN
                @endif
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('products.create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                                    <th> Ảnh </th>
                                    <th> Name </th>
                                    <th> Quantity </th>
                                    <th> Cr quantity </th>
                                    <th> Sold </th>
                                    <th> Price </th>
                                    <th> Status</th>
                                    <th> Created at </th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($products->count())
                                @foreach($products as $product)
                                <tr>
                                    <td> {{$product->id}}</td>
                                    <td><img class="ml-2" src="{{asset('/uploads/'.$product->thumbnail)}}" alt=""></td>
                                    <td> {{$product->getLimitName(25)}} </td>
                                    <td> {{$product->quantity}} </td>
                                    <td> {{$product->current_quantity}} </td>
                                    <td> {{$product->order_items_count}} </td>
                                    <td> {{$product->price}} </td>
                                    <td>
                                    {{$product->getStatus()}}
                                    </td>
                                    <td>{{$product->getDate()}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/products/edit/'.$product->id )}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/products/delete/'.$product->id )}}"><i class="fas fa-trash"></i></a>
                                        <a class="btn btn-gradient-danger atribute-product p-2 ml-2" href="{{ url('adminstore/products/'.$product->id.'/attribute' )}}">
                                        <i class="fas fa-plus-circle"></i> <span class="attribue-product-count">{{$product->attributes_count}}</span></a>
                                        <a class="btn btn-gradient-danger atribute-product p-2 ml-2" href="{{ url('adminstore/products/'.$product->id.'/detail-attribute' )}}">
                                        <i class="fas fa-minus "></i><span class="attribue-product-count">{{$product->attributes_count}}</span></a>
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
                        <div class="mt-3 lion-pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
