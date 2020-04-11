<head>
    <header class="lion-head">
        <div class="lion-wrapper">
            <div class="container">

                <div class="lion-nav">
                    <div class="lion-nav__left">
                        <ul>
                            <li class="lion-nav__iteam"><a href="{{asset('products/men')}}">Nam</a></li>
                            <li class="lion-nav__iteam"><a href="{{asset('products/women')}}">Nữ</a></li>
                            <!-- <li class="lion-nav__iteam"><a href="/product">Unisex</a></li> -->
                            <li class="lion-nav__iteam"><a href="{{asset('products/accessories')}}">Phụ kiện</a></li>
                            <li class="lion-nav__iteam"><a href="{{asset('products/blogs')}}">Blog</a></li>
                        </ul>
                    </div>
                    <div class="lion-logo">
                        <a href="/" class="lion-logo__image"><img src="/images/shoplogo.png" alt=""></a>
                    </div>

                    <div class="lion-nav__right">
                        <ul>
                            <li class="lion-nav__iteam"><a href="">
                                    <span class="mobile--hidden"> Giỏ hàng</span>
                                    <i class="fas fa-shopping-cart"></i>
                                </a></li>
                            <li class="lion-nav__iteam ">
                                <a href="" class="mobile--hidden"><i class="fas fa-search"></i></a></li>
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
    </header>

</head>
