@extends('layout.master')
@section('content')
<section class="product">
    <div class="img-head">
        @if($poster)
        <img class="img-fluid" src="{{asset('uploads/'.$poster->thumbnail)}}" alt="">
        @endif
    </div>
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="sort_product">
                @if($product_count->count())
                <h5 class="count-product">{{$product_count->count()}} <span>Product</span></h5>
                @endif
            </div>

            <div class="mb-2  d-flex  ">
                <span class="text-sortby">Sort by</span>
                <select class="custom-select custom-select-sm">
                    <option selected>Featured</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

        </div>

    </div>
    <div class="line"></div>
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
            <div class="d-flex justify-content-end">
                {{$products->links()}}
            </div>
        </div>
    </div>
</section>
@endsection
