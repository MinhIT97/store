<section class="home">
    <div class="baner">
        @if($poster)
        <a href="{{$poster->link}}">
            <img class="img-fluid lion-main__image position-relative" src="{{$poster->thumbnail}}" alt="">
        </a>

        @endif
    </div>
    <div class="main-slider">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                @if($new_sesion->count())
                @foreach($new_sesion as $session)
                <li data-target="#slider" data-slide-to="" class="">
                    <div></div>
                </li>
                @endforeach
                @endif
            </ul>
            <div class="carousel-inner">
                @if($new_sesion->count())
                @foreach($new_sesion as $session)
                @if ($loop->first)
                <div class="carousel-item active">
                    <a href="">
                        <img class="img-fluid" src="{{$session->thumbnail}}">
                    </a>
                </div>
                @else
                <div class="carousel-item">
                    <a href="">
                        <img class="img-fluid" src="{{$session->thumbnail}}">
                    </a>
                </div>
                @endif
                @endforeach
                @endif
            </div>
            <a class="carousel-control-prev prev" href="#slider" data-slide="prev">
            </a>
            <a class="carousel-control-next next" href="#slider" data-slide="next">
            </a>
        </div>
    </div>
    <div class="home-product">
        <div class="container">
            <div class="product-head text-center">
                <h2 class="text-uppercase">
                    <p> <strong>Men</strong> best sellers</p>
                </h2>
            </div>
            <section class="product-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_slider">
                                @if($product_men->count())
                                @foreach($product_men as $product)
                                <div class="slide-item">
                                    <a href="{{asset('products/'.$product->type.'/'.$product->slug)}}">
                                        <div class="slide-item__image">
                                            <img class="img-fluid" src="{{$product->thumbnail}}" alt="">
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
                </div>
            </section>
        </div>
    </div>
    <div class="container">
        <div class="style-product">
            <div>
                <div class="style-product__head text-center">
                    <div>
                        <i class="fab fa-instagram fa-2x"></i>
                    </div>
                    <h2 class="text-uppercase">
                        <p> Shop our instagram</p>
                        <i class="fas fa-hashtag">Mstyle</i>
                    </h2>
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="style-main">
                                <img class="img-fluid" src="/images/5250.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                                <div class="col-6 style-item">
                                    <div class="bg-black">
                                        <img class="img-fluid image " src="/images/4725.jpg" alt="">
                                    </div>
                                    <i class="fa fa-2x fa-instagram middle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
    <div class="home-product">
        <div class="container">
            <div class="product-head text-center">
                <h2 class="text-uppercase">
                    <p> <strong>Women</strong> best sellers</p>
                </h2>
            </div>
            <section class="product-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_slider">
                                @if($product_women->count())
                                @foreach($product_women as $product)
                                <div class="slide-item">
                                    <a href="{{asset('products/'.$product->type.'/'.$product->slug)}}">
                                        <div class="slide-item__image">
                                            <img class="img-fluid" src="{{$product->thumbnail}}" alt="">
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
                </div>
            </section>
        </div>
    </div>
    <div class="home-product">
        <div class="container">
            <div class="product-head text-center">
                <h2 class="text-uppercase">
                    <p> <strong>accessories</strong> best sellers</p>
                </h2>
            </div>
            <section class="product-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_slider">
                                @if($product_accessories->count())
                                @foreach($product_accessories as $product)
                                <div class="slide-item">
                                    <a href="{{asset('products/'.$product->type.'/'.$product->slug)}}">
                                        <div class="slide-item__image">
                                            <img class="img-fluid" src="{{$product->thumbnail}}" alt="">
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
                </div>
            </section>
        </div>
    </div>
</section>
