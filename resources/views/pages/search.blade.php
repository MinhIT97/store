@extends('layout.master')
@section('content')

<nav class="breadcrumb container">
    <a class="breadcrumb-item" href="/">Trang chủ</a>
    <a class="breadcrumb-item" >Tìm kiếm</a>
</nav>

<section class="lion-search">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Blog</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-slide">
                            @if($products->count())
                            @foreach($products as $product)
                            <div class="slide-item">
                                <a href="{{asset('products/'.$product->type.'/'.$product->slug)}}">
                                    <div class="slide-item__image">
                                        <img class="img-fluid" src="{{asset('uploads/'.$product->thumbnail)}}" alt="">
                                    </div>
                                    <div class="slide-item__content text-center">
                                        <div class="slide-item__content--heading">
                                            <a class="name">{{$product->getLimitName(15)}}</a>
                                        </div>
                                        <div class="slide-item__content--content">
                                            <span class="money"> {{number_format($product->price)}}₫</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="search-blog mt-4">
                    <h5>BLogs</h5>
                    <div class="blog">
                        @if($blogs->count())
                        @foreach($blogs as $blog)
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <img class="img-fluid" src="{{asset('uploads/'.$blog->thumbnail)}}" alt="">
                                </div>
                                <div class="col-12 col-md-10">
                                    <div class="date"><span><a href="">Hot trend</a></span><span class="font-italic date-time"><span>{{$blog->getMonth()}}</<span></span></div>
                                    <h4>
                                        {!!$blog->title!!}
                                    </h4>
                                    <span class="content">
                                        {!!$blog->description!!}
                                    </span>
                                    <div class="show-more">
                                        <a href="{{url('blogs/'.$blog->slug)}}">Xem Thêm</a>
                                        <span><i class="fas fa-chevron-circle-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="product">
                    <div class="container">
                        <div class="row">
                            @if($products->count())
                            @foreach($products as $product)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="product-item">
                                    <a href="{{asset('products/'.$product->type.'/'.$product->slug)}}">
                                        <div class="slide-item__image">
                                            <img class="img-fluid" src="{{asset('/uploads/'.$product->thumbnail)}}" alt="">
                                        </div>
                                        <div class="text-center">
                                            <div class="name">
                                                <span>{{$product->getLimitName(15)}}</span>
                                            </div>
                                            <div class="price">
                                                <span>{{number_format($product->price)}} ₫ </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="blog">
                    @if($blogs->count())
                    @foreach($blogs as $blog)
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img class="img-fluid" src="{{asset('uploads/'.$blog->thumbnail)}}" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="date"><span><a href="">Hot trend</a></span><span class="font-italic date-time"><span>{{$blog->getMonth()}}</<span></span></div>
                                <h4>
                                    {!!$blog->title!!}
                                </h4>
                                <span class="content">
                                    {!!$blog->description!!}
                                </span>
                                <div class="show-more">
                                    <a href="{{url('blogs/'.$blog->slug)}}">Xem Thêm</a>
                                    <span><i class="fas fa-chevron-circle-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div>
                        Bạn vui lòng quay lại sau.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
