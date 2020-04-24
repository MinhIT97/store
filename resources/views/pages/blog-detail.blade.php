@extends('layout.master')
@section('content')
<nav class="breadcrumb container">
    <a class="breadcrumb-item" href="/">Trang chủ</a>
    <a class="breadcrumb-item" href="/blogs">Blogs</a>
    <a class="breadcrumb-item active" href=""> {!!$blog->title!!}</a>
</nav>

<section class="blog-detail">
    <div class="container">
        <div class="d-flex justify-content-between">

            <h1> {{$blog->title}}
            </h1>
            <h5 class="date">
                {{$blog->getMonth()}}
            </h5>
        </div>
        <div class="col-10 p-5 m-2">
            <img class="img-fluid" src="{{asset('uploads/'.$blog->thumbnail)}}" alt="">
        </div>
        <div class="blog-content">
            {!!$blog->content!!}
        </div>

    </div>

</section>
@endsection
