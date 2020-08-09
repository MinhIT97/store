@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Category
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @if(request()->is('adminstore/categories/products'))
                    <li class="breadcrumb-item"><a href="{{route('categories.products.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
                    @else
                    <li class="breadcrumb-item"><a href="{{route('categories.posts.show_create')}}" class="text-decoration-none">CREATE NEW</a></li>
                    @endif
                    <!-- <li class="breadcrumb-item active" aria-cur'rent="page">Basic tables</li> -->
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if($categories->count())
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Ngày tạo </th>
                                    <th> Ngày sửa </th>
                                    @if($categories->first()->products_count)
                                    <th> Total products </th>
                                    @endif
                                    @if($categories->first()->posts_count)
                                    <th> Total blogs </th>
                                    @endif
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($categories->count())
                                @foreach($categories as $category)
                                <tr>
                                    <td> {{$category->id}}</td>
                                    <td> {{$category->name}} </td>
                                    <td>{{$category->getDate()}} </td>
                                    <td>{{$category->getDateUpdate()}} </td>
                                    @if($category->products_count)
                                    <td>{{$category->products_count}}
                                        <a class="ml-4" href="{{url('adminstore/categories/'.$category->id.'/products/')}}"><i class="far fa-eye"></i></a>
                                    </td>
                                    @endif
                                    @if($category->posts_count)
                                    <td>{{$category->posts_count}}
                                        <a class="ml-4" href="{{url('adminstore/categories/'.$category->id.'/posts/')}}"><i class="far fa-eye"></i></a>
                                    </td>
                                    @endif
                                    <td>
                                        <a class="btn btn-gradient-info p-2" href="{{url('adminstore/edit-category/'.$category->id)}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{url('adminstore/category/'.$category->id)}}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div>
                                    <p>No category</p>
                                </div>
                                @endif
                            </tbody>
                        </table>
                        <div class="mt-3">

                        </div>
                        @else
                        Categories is empty!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
