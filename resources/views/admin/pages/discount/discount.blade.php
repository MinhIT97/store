@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            Discount
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('discount.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                                    <th> Code </th>
                                    <th> Percent </th>
                                    <th> Status </th>
                                    <th> Start Date </th>
                                    <th> End Date </th>

                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($discounts->count())
                                @foreach($discounts as $discount)
                                <tr>
                                    <td> {{$discount->id}}</td>
                                    <td> {{$discount->code}} </td>
                                    <td> {!!$discount->percent!!} % </td>
                                    <td> {!!$discount->getStatus()!!}</td>
                                    <td>{{$discount->getStartDate()}} </td>
                                    <td>{{$discount->getEndDate()}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/discount/'.$discount->id )}}"><i class="fas fa-edit"></i></a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
