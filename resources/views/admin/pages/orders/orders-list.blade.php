@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Orders
            </h3>
            <div>
                <form action="">
                    <input type="date" name="from" id="dateFrom">
                    <input type="date" name="to" id="dateTo">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" class="btn btn-gradient-primary mr-2">
                        Submit
                    </button>
                    <a href="{{route('products.exports')}}">
                        <button type="button" class="btn btn-gradient-success btn-icon-text">
                            <i class="mdi mdi-file-excel"></i>
                            Excel
                        </button>
                    </a>
                </form>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('orders.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                                    <th> Status</th>
                                    <th> Email</th>
                                    <th> Phone</th>
                                    <th> Province</th>
                                    <th> District</th>
                                    <th> Adsress </th>
                                    <th> Total Price </th>
                                    <th> Note </th>
                                    <th> Ngày tạo </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($orders->count())
                                @foreach($orders as $order)
                                <tr>
                                    <td> {{$order->id}}</td>
                                    <td> {{$order->name}} </td>
                                    <td> {{$order->getStatus()}} </td>
                                    <td>{{$order->email}} </td>
                                    <td>{{$order->phone}} </td>

                                    <td>{{$order->province->name}} </td>
                                    <td>{{$order->district->name}} </td>
                                    <td>{{$order->address}} </td>
                                    <td>{{$order->total_price}} </td>
                                    <td>{{$order->note}} </td>
                                    <td>{{$order->getDate()}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{url('adminstore/edit-orders/'.$order->id)}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{url('adminstore/delete-orders/'.$order->id)}}"><i class="fas fa-trash"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/orders/'.$order->id.'/items' )}}"><i class="fas fa-plus-circle"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/orders/'.$order->id.'/detail-items' )}}"><i class="fas fa-minus"></i></a>
                                        <a class="btn  btn-gradient-primary p-2 ml-2" href="{{ url('adminstore/orders/'.$order->id.'/detail-items' )}}"><i class="mdi mdi-information"></i></a>
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
