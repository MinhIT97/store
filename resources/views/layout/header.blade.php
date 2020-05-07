<head>
    <header class="lion-head">
        <div class="lion-wrapper">
            <div class="search-bar hide">
                <div class="search-close" title="close">
                    <i class="fas fa-times"></i>
                </div>
                <form class="search-wrapper" method="GET" action="{{route('search.show')}}">
                    <input type="text" class="search-input" placeholder="Search..." name="search" autocomplete="off">
                    <button type="submit" class="search-submit" title="search">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="container">
                <div class="lion-nav">
                    <div class="lion-nav__left">
                        <ul>
                            <li class="lion-nav__iteam"><a href="{{asset('products/men')}}">Nam</a></li>
                            <li class="lion-nav__iteam"><a href="{{asset('products/women')}}">Nữ</a></li>
                            <li class="lion-nav__iteam"><a href="{{asset('products/accessories')}}">Phụ kiện</a></li>
                            <li class="lion-nav__iteam"><a href="{{route('blogs')}}">Blog</a></li>
                        </ul>
                    </div>
                    <div class="lion-logo">
                        <a href="/" class="lion-logo__image"><img src="/images/shoplogo.png" alt=""></a>
                    </div>
                    <div class="lion-nav__right">
                        <ul>
                            <li class="lion-nav__iteam position-relative">
                                <a class="cart-button" id="lion-btn-cart">
                                    <span class="mobile--hidden"> Cart</span>
                                    <i class="fas fa-shopping-cart"></i>

                                </a>
                                <span class="position-absolute lion-cart-item-quantity">
                                    @if($cart)
                                    {{$cart->cart_items_count}}
                                    @endif
                                </span>
                            </li>
                            <li class="lion-nav__iteam ">
                                <a class="mobile--hidden search"><i class="fas fa-search"></i></a></li>
                            @guest
                            <li class="lion-nav__iteam"><a href="/login">
                                    <span class="mobile--hidden">Đăng nhập</span>
                                    <i class="far fa-user"></i></a></li>
                            @if (Route::has('register'))
                            <li class="lion-nav__iteam"><a href="{{ route('register') }}">
                                    <span class="mobile--hidden">{{ __('Register') }}</span>
                                    <i class="far fa-user"></i></a></li>
                            @endif
                            @else
                            <li class="lion-nav__iteam nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="lion-cart " tabindex="-1">
            <form action="/cart" method="get">
            @csrf
                <div class="d-flex justify-content-between">
                    <div class="mt-3 d-flex ">
                        <p>
                            SHOPPING BAG
                        </p>
                        <span class="lion-quantity-cart text-center ml-2"> <span>(</span> <span>
                                @if($cart)
                                {{$cart->cart_items_count}}
                                @endif
                            </span> <span>)</span></span>
                    </div>
                    <div class="lion-close-cart">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="line"></div>
                <div class="product">
                    @if($cart)
                    @foreach($cart->cartItems as $cartItem)
                    <div class="product-cart-item">
                        <div class="row">
                            <div class="col-5 ">
                                <img src="{{asset('uploads/'. $cartItem->product->thumbnail)}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-6 m-0 p-0">
                                <div class="mb-1"> {!! $cartItem->product->getLimitName(20) !!}</div>
                                <span>Color: <span class="text-capitalize">{!! $cartItem->color->color !!}</span></span>
                                <span>-</span>
                                <span>Zize : {!! $cartItem->size->size !!}</span>
                                <div class="mt-2 mb-2">
                                    <input class="quantity" data-id="{!! $cartItem->id !!}"  value="{{$cartItem->quantity}}" type="number" min="0">
                                </div>
                                <div class="" id="amount-{{$cartItem->id}}">{{number_format($cartItem->amount)}}₫</div>
                            </div>
                            <div class="col-1 p-0">
                                <a href="{{url('delete-cart-item/'.$cartItem->id)}}"> <i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="line mt-2 mb-2"></div>
                    @endforeach
                    @endif
                    @if($cart->total != 0)
                    <div class="line mt-2 mb-2"></div>
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p>
                                TẠM TÍNH
                            </p>
                        </div>
                        <div class="lion-total-cart">
                            @if($cart)
                            <p><strong id="total">{{number_format($cart->total)}}</strong></p>
                            @endif
                        </div>
                    </div>
                    <div>
                        <button class="btn text-center lion-pay">Pay</button>
                    </div>
                    @else
                    <p>Cart is empty</p>
                    @endif
                </div>
            </form>
        </div>
    </header>
</head>
