@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Blogs
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('blog.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
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
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Title</th>
                                    <th> Description</th>
                                    <th> View </th>
                                    <th> Ngày tạo </th>
                                    <th> Ngày sửa </th>
                                    <th> Hình ảnh </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($blogs->count())
                                @foreach($blogs as $blog)
                                <tr>
                                    <td> {{$blog->id}}</td>
                                    <td> {{$blog->title}} </td>
                                    <td> {{$blog->description}} </td>
                                    <td> {{$blog->view}} </td>
                                    <td>{{$blog->getDate()}} </td>
                                    <td>{{$blog->getDateUpdate()}} </td>
                                    <td><img class="ml-2" src="{{asset($blog->thumbnail)}}" alt=""></td>

                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{url('adminstore/edit-blog/'.$blog->id)}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{url('adminstore/delete-blog/'.$blog->id)}}"><i class="fas fa-trash"></i></a>
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
