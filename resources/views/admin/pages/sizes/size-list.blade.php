@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                size
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('size.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                                    <th> Size</th>
                                    <th> Ngày tạo </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($sizes->count())
                                @foreach($sizes as $size)
                                <tr>
                                    <td> {{$size->id}}</td>
                                    <td> {{$size->size}} </td>
                                    <td>{{$size->getDate()}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{url('adminstore/edit-size/'.$size->id)}}">Sửa</a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{url('adminstore/size/'.$size->id)}}">Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div>
                                    <p>No blog</p>
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
