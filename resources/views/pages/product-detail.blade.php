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
                    <div class="item">
                        <img class="img-fluid" src="/images/5025.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="/images/5025.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="/images/5025.jpg" alt="">
                    </div>

                </div>
                <div class="product-thumbnail-child">
                    @if($product)
                    <div class="item">
                        <img class="img-fluid" src="{{asset('uploads/'.$product->thumbnail)}}" alt="">
                    </div>
                    @endif
                    <div class="item">
                        <img class="img-fluid" src="/images/5025.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="/images/5025.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="/images/5025.jpg" alt="">
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-5 col-lg-5">
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
                    <div class="d-flex">
                        <div class="product-summary--color">
                            <label>
                                <span></span>
                            </label>
                        </div>
                        <div class="product-summary--color">
                            <label>
                                <span class="bg-light"></span>
                            </label>
                        </div>
                    </div>
                    <div>
                        Kích thước
                    </div>
                    <div class="product-summary--size">

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="" id="" value="checkedValue" checked>

                            <label class="form-check-label active">
                                S
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="" id="" value="checkedValue" checked>

                            <label class="form-check-label">
                                M
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="" id="" value="checkedValue" checked>

                            <label class="form-check-label">
                                L
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="" id="" value="checkedValue" checked>

                            <label class="form-check-label">
                                XL
                            </label>
                        </div>
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
                            Áo nỉ dài tay nam dáng loose in graphic Star Wars Luke Skywalker.<br>
                            - Chất liệu: nỉ cotton<br>
                            - Size mẫu mặc: L<br>
                            - Số đo mẫu: cao 185cm, nặng 65 kg, ngực 90cm - eo 72cm - hông 88cm<br>
                        </p>
                    </div>
                    <div class="line"></div>

                </div>
                @endif
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/pla3.png" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/pla6.png" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/pla3.png" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/pla3.png" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/5887.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/5887.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/5887.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="">
                        <div>
                            <img class="img-fluid" src="/images/5887.jpg" alt="">
                        </div>
                        <div class="name">
                            <span>
                                pampa hi change
                            </span>
                        </div>
                        <div class="price">
                            <span>
                                2.100.000₫

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
            </div>
        </div>

    </div>



</section>
@endsection
