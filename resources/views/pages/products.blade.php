@extends('layout.master')
@section('content')
<section class="product">
    <div class="img-head">
        <img class="img-fluid" src="/images/3407807.jpg" alt="">
    </div>
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
</section>
@endsection
