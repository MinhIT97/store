@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
        <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users.show')}}" class="text-decoration-none"><i class="fas fa-home"></i> Dashboard </a></li>
            <li class="breadcrumb-item"><a href="{{route('orders.show')}}" class="text-decoration-none">Order</a></li>
            <li class="breadcrumb-item">Order Items</li>
        </ol>
    </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('pages.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                                    <th> Name</th>
                                    <th> Quantity</th>
                                    <th> Price</th>
                                    <th> Amount</th>
                                    <th> Ngày tạo </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($itemOrder->orderItems->count())
                                @foreach($itemOrder->orderItems as $order)
                                <tr>
                                    <td> {{$order->id}}</td>
                                    <td> {{$order->product->name}} </td>
                                    <td>{{$order->quantity}} </td>
                                    <td>{{$order->price}} </td>
                                    <td>{{$order->amount}} </td>
                                    <td>{{$order->getDate()}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{url('adminstore/edit-orders/'.$order->id)}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{url('adminstore/delete-orders/'.$order->id)}}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div>
                                    <p>No poster</p>
                                </div>
                                @endif
                            </tbody>
                        </table>
                        <div class="mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
