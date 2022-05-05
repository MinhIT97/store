@extends('layout.master')
@section('content')
<section class="history-detail">
    <div class="container">
        <div class="mt-5">
            <div class="row">
                <div class="col-5">
                    <div>
                        <a href="/" class="text-dark"> <i class="fas fa-long-arrow-alt-left"></i></a>

                        <div class="text-uppercase text-center">
                            <strong class="display-5">Store</strong>
                        </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <div class="mt-2 mb-2 rube ">
                                <strong> Customer Information</strong>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="3" scope="col">{{$order->user->name}}</th>
                                        <th colspan="3" scope="col">{{$order->code}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4">{{$order->user->email}}</td>
                                        <td colspan="2">{{$order->user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">{{$order->user->city}}</td>
                                        <td colspan="2">{{$order->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">{{$order->user->address}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-2 mb-2 rube">
                                <strong> Return Detail</strong>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td colspan="4">{{$order->province->name}}</td>
                                        <td colspan="2">{{$order->district->name}}</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td colspan="4">{{$order->email}}</td>
                                        <td colspan="2">{{$order->name}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">{{$order->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">{{$order->address}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">{{$order->note}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-uppercase btn bg-store mt-2 mb-2 w-100  text-light">
                        fulfill order
                    </div>
                </div>
                <div class="col-7">
                    <div class="row">
                        @foreach($order->orderItems as $item)
                        <div class="col-4">
                            <a class="text-decoration-none text-dark" href="/products/{{$item->product->type}}/{{$item->product->slug}}">
                                <div>
                                    <img class="img-fluid" src="{{$item->product->thumbnail}}" alt="{{$item->product->name}}">
                                </div>
                                <div>
                                    <div class="product-name mt-2">
                                        {{$item->product->name}}
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <div class="mr-1">
                                            <strong> Quantity : {{$item->quantity}}</strong>
                                        </div>
                                        <div>
                                            <strong> Size: {{$item->size->size}}</strong>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <strong class="rube"> Price :{{$item->price}}</strong>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
