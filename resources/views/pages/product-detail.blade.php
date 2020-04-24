@extends('layout.master')
@section('content')
<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-7">
                <div class="product-thumbnail">
                    @if($product)
                    <div class="item">
                        <img class="img-fluid" src="{{asset('uploads/'.$product->thumbnail)}}" alt="">
                    </div>
                    @endif
                    @if($product->imagaes->count())
                    @foreach($product->imagaes as $image)
                    <div class="item">
                        <img class="img-fluid" src="{{asset('/uploads/'.$image->url)}}" alt="">
                    </div>
                    @endforeach
                    @endif();
                </div>
                <div class="product-thumbnail-child">
                    @if($product)
                    <div class="item">
                        <img class="img-fluid" src="{{asset('uploads/'.$product->thumbnail)}}" alt="">
                    </div>
                    @endif
                    @if($product->imagaes->count())
                    @foreach($product->imagaes as $image)
                    <div class="item">
                        <img class="img-fluid" src="{{asset('/uploads/'.$image->url)}}" alt="">
                    </div>
                    @endforeach
                    @endif();
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-5">
                <form action="">
                    @if($product)
                    <div class="product-summary">
                        <div class="product-summary--name">
                            <h4>{{$product->getLimitName(25)}}</h4>
                        </div>
                        <div class="product-summary--code">
                            <span>Mã Sản Phẩm:</span> <span>{{$product->code}}</span>
                        </div>
                        <div class="product-summary--price">
                            {{number_format($product->price)}} ₫
                        </div>
                        <div>
                            <p>Mầu sắc</p>
                        </div>


                        <div class="product-summary--color d-flex mb-5">
                            @if($product->attributes->count())

                            @foreach($colors as $color)
                            @if(in_array($color->id,$color_id))
                            <label class="product-colors">
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark {{$color->color}}"></span>
                            </label>
                            @endif
                            @endforeach
                            @endif
                        </div>

                        <div>
                            Kích thước
                        </div>
                        <div class="product-summary--size">
                            @if($product->sizes->count())
                            @foreach($product->sizes as $size)
                            <div class="form-check">
                                <label for="{{$size->size}}" class="radbox">
                                    <input type="radio" id="{{$size->size}}" value="{{$size->id}}" name="size" checked="">
                                    <span class="rad-text">{{$size->size}}</span>
                                </label>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div>
                            Số lượng
                        </div>
                        <input class="input-quantity text-center" type="number" min="0" value="1">
                        <div>
                            <button type="btn" class="btn btn-adtocart ">
                                Thêm vào giỏ hàng
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="info-detail">
                            <h4>Chi tiết sản phẩm</h4>
                            <p>
                                {!!$product->content!!}
                            </p>
                        </div>
                        <div class="line"></div>
                    </div>
                    @endif
                </form>

            </div>
        </div>
    </div>
    <div class="accessories">
        <div class="container">
            <div class="product-head text-center">
                <h2 class="text-uppercase">
                    <p> <strong>accessories</strong> best sellers</p>
                </h2>
            </div>
            <div class="row">
                @if($product_accessories->count())
                @foreach($product_accessories as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="{{asset('/products/'.$product->type.'/'.$product->slug)}}">
                        <div>
                            <img class="img-fluid" src="{{asset('uploads/'.$product->thumbnail)}}" alt="">
                        </div>
                        <div class="name">
                            <span>
                                {{$product->getLimitName(20)}}
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                {{number_format($product->price)}}₫
                            </span>
                        </div>
                        <span class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="related-products">
        <div class="container">
            <div class="product-head text-center">
                <h2 class="text-uppercase">
                    <p> <strong>mens</strong> best sellers</p>
                </h2>
            </div>
            <div class="row">
                @if($product_men->count())
                @foreach($product_men as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="{{asset('/products/'.$product->type.'/'.$product->slug)}}">
                        <div>
                            <img class="img-fluid" src="{{asset('uploads/'.$product->thumbnail)}}" alt="">
                        </div>
                        <div class="name">
                            <span>
                                {{$product->getLimitName(20)}}
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                {{number_format($product->price)}}₫
                            </span>
                        </div>
                        <span class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="related-products">
        <div class="container">
            <div class="product-head text-center">
                <h2 class="text-uppercase">
                    <p> <strong>Womens</strong> best sellers</p>
                </h2>
            </div>
            <div class="row">
                @if($product_women->count())
                @foreach($product_women as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="{{asset('/products/'.$product->type.'/'.$product->slug)}}">
                        <div>
                            <img class="img-fluid" src="{{asset('uploads/'.$product->thumbnail)}}" alt="">
                        </div>
                        <div class="name">
                            <span>
                                {{$product->getLimitName(20)}}
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                {{number_format($product->price)}}₫
                            </span>
                        </div>
                        <span class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
