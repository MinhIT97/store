@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Colors
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('colors.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                                    <th> Name </th>

                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($colors->count())
                                @foreach($colors as $color)
                                <tr>
                                    <td> {{$color->id}}</td>
                                    <td> {{$color->color}}</td>
                                    <td>{{$color->getDate()}} </td>

                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/edit-color/'.$color->id )}}"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/delete-color/'.$color->id )}}"><i class="mdi mdi-delete-sweep"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div>
                                    <p>Chưa có màu</p>
                                </div>
                                @endif
                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $colors->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
