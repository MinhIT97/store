@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> User </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('users.show_create')}}" class="text-decoration-none">Create new</a></li>
                    <!-- <li class="breadcrumb-item active" aria-cur'rent="page">Basic tables</li> -->
                </ol>
            </nav>
        </div>
        <div class="d-sm-flex justify-content-center mb-4">
            <form action="">
                <label for="form" class="font-weight-bold">From:</label>
                <input type="date" class="p-2" name="from" id="dateFrom">
                <label for="to" class="font-weight-bold">To:</label>
                <input type="date" class="p-2" name="to" id="dateTo">
                <input type="text" class="p-2" name="search" placeholder="Search">
                <button type="submit" class="btn btn-gradient-primary mr-2">
                    Submit
                </button>
            </form>
            <form action="{{route('users.exprort')}}">
                <input name="url" type="text" value="{{request()->fullUrl()}}" hidden>
                <button type="submit" class="btn btn-gradient-success btn-icon-text">
                    <i class="mdi mdi-file-excel"></i>
                    Excel
                </button>
            </form>
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Avatar </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Status </th>
                                    <th> Roles </th>
                                    <th> Ngày tạo </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($users->count())
                                @foreach($users as $user)
                                <tr>
                                    <td> {{$user->id}}</td>
                                    <td> {{$user->name}} </td>
                                    <td>
                                        @if($user->avatar)
                                        <img class="ml-2" src="{{asset('/uploads/'.$user->avatar)}}" alt="">
                                        @endif
                                    </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->phone}} </td>
                                    <td> {{$user->getStatus()}}
                                    </td>
                                    <td>
                                        {{$user->getRoles()}}
                                    </td>
                                    <td>{{$user->created_at}} </td>
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{ url('adminstore/edit-user/'.$user->id )}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/delete-user/'.$user->id )}}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div>
                                    <p>Chưa có tài khoản đăng kí</p>
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
