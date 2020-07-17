<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Store - Check out</title>
</head>

<body>
    <section class="lion-checkout">
        <div></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 check-out-cart">
                    <h5>
                        Store
                    </h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/cart" class="checkout-cart">Cart</a></li>
                        <li class="breadcrumb-item"><a href="#">Shipment Details</a></li>
                    </ol>
                    <div class="cart">
                        <form method="POST" action="{{route('cart.order')}}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Email">
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I would like to receive the latest information and offers from Store</label>
                            </div>
                            <div class="shipping-address">
                                Shipping address
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput"></label>
                                <input type="text" class="form-control" id="full_name" name="name" placeholder="Name">
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                                <p class="help is-danger">{{ $errors->first('phone') }}</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                                <p class="help is-danger">{{ $errors->first('address') }}</p>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="province_id">Thành phố <span class="text-danger">*</span></label>
                                    <div class="input-wrap">
                                        <select class="form-control" name="province_id" id="province_id" required>
                                            @foreach($province as $info)
                                            <option value="{{$info->id}}"> {{$info->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <p class="help is-danger">{{ $errors->first('city') }}</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="district_id">Quận/Huyện <span class="text-danger">*</span></label>
                                    <div class="input-wrap">
                                        <select class="form-control" name="district_id" id="district_id" #district="ngModel" autocomplete="new-password" required>
                                            <option></option>
                                        </select>
                                    </div>
                                    <p class="help is-danger">{{ $errors->first('district_id') }}</p>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Commune</label>
                                    <input type="text" name="commune" class="form-control" id="inputZip">
                                    <!-- <p class="help is-danger">{{ $errors->first('commune') }}</p> -->
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="/"><i class="fas fa-angle-left mr-2"></i>Back to shoping</a>
                                <button class="btn btn-checkcart">Complete order</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-12 product-checkout">
                    @if($cart)
                    @foreach($cart->cartItems as $cart_item)
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3 ">
                                <img class="img-fluid image-checkout" src="{{$cart_item->product->thumbnail}}" alt="">
                                <span class="cart-quantity">{{$cart_item->quantity}}</span>
                            </div>
                            <div class="col-5">
                                <div class="name text-uppercase">{{$cart_item->product->getLimitName(20)}}</div>
                                <span class="color text-capitalize"> {{$cart_item->color->color}}</span><span> / </span><span class="size text-capitalize">{{$cart_item->size->size}}</span>
                            </div>
                            <div class="price col-4">
                                {{number_format($cart_item->amount)}}₫
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="line mb-3 mt-3"></div>

                    <form class="form-inline d-flex justify-content-center">
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Discount code">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <button type="submit" class="btn btn-primary btn-discount mb-2">Use</button>
                    </form>
                    <div class="line mb-3 mt-3"></div>
                    <div class="d-flex justify-content-between mt-3">
                        <div class="total-name">Tạm tính</div>
                        <div class="total-price"> {{number_format($cart->total) }} ₫</div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div class="total-name">Phí vận chuyển</div>
                        <div class="total-price">400000 ₫</div>
                    </div>
                    <div class="line mb-3 mt-3"></div>
                    <div class="d-flex justify-content-between">
                        <div>Tổng cộng</div>
                        <div class="payment-due-price"><span class="payment-due-currency">VND</span> {{number_format($cart->total) }} ₫</div>
                    </div>


                </div>
            </div>
        </div>
        </div>

        </div>

    </section>


</body>

</html>
