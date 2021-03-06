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
                                    <td> @if($user->status === 0)
                                        Banned
                                        @elseif($user->status === 1)
                                        Active
                                        @else
                                        Tài khoản không an toàn
                                        @endif
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
