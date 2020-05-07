<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Store - Check out</title>
</head>

<body>
    <section class="lion-checkout">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h5>
                        Store
                    </h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/cart" class="checkout-cart">Cart</a></li>
                        <li class="breadcrumb-item"><a href="#">Shipment Details</a></li>
                    </ol>


                    <div class="cart">
                        <form action="">
                            <div class="form-group">
                                <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Email">
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
                                <input type="text" class="form-control" id="full_name" name="email" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href=""><i class="fas fa-angle-left mr-2"></i>Back to cart</a>
                                <button class="btn btn-checkcart">Complete order</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <div class="product-checkout">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="/images/103.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <div class="name">Áo Dài</div>
                                <span class="color"> trawnsg</span> <span class="size"></span>
                            </div>
                            <div class="price">
                                20000000 ₫
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>

                    <form class="form-inline">
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>

                    <div class="line"></div>
                    <div class="d-flex justify-content-between">
                        <div>Tạm tính</div>
                        <div>400000 ₫</div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>Tạm tính</div>
                        <div>400000 ₫</div>
                    </div>
                    <div class="line"></div>
                    <div class="d-flex justify-content-between">
                        <div>Tổng cộng</div>
                        <div>400000 ₫</div>
                    </div>


                </div>
            </div>
        </div>
        </div>

        </div>

    </section>


</body>

</html>
