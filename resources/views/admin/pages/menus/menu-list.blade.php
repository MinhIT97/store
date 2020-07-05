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
                    <li class="breadcrumb-item"><a href="{{route('menus.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                        @elseif(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Lebel</th>
                                    <th> Status</th>
                                    <th> Link</th>
                                    <th> Ngày tạo </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($menus->count())
                                @foreach($menus as $menu)
                                <tr>
                                    <td> {{$menu->id}}</td>
                                    <td> {{$menu->label}}</td>
                                    <td> {{$menu->status}}</td>
                                    <td> {{$menu->link}} </td>
                                    <td>{{$menu->getDate()}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{url('adminstore/menus-edit/'.$menu->id)}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{url('adminstore/menus-delete/'.$menu->id)}}"><i class="fas fa-trash"></i></a>
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
