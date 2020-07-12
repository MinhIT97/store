@extends('layout.master')
@section('content')
<section class="history">
    <div class="container-md ">
        <div class="history-order">
            <div class="table-responsive mt-5 mb-5">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Order code</th>
                            <th scope="col">Date of purchase</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    @if($orders->count())
                    <tbody>
                        @foreach($orders as $order)

                        <tr>
                            <th scope="row"></th>
                            <td>{{$order->code}}</td>
                            <td>{{$order->getDate()}}</td>
                            <td>{{$order->total_price}}</td>
                            <td class="d-flex justify-content-between"> <span>{{$order->getStatus()}}</span> <span><a class="btn border bg-light text-dark text-decoration-none" href="{{url('/history/orders/'.$order->id)}}">Detail</a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center"> Empty order !</td>
                        <tr>
                    </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
