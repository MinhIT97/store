<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <style>
        body {
            background-color: #A451F7;
            display: flex;
            justify-content: center;
            box-shadow: 0 49px 60px 0 rgba(0, 0, 0, 0.2), 0 38px 61px 0 rgba(0, 0, 0, 1);
            height: 100%;


        }

        .main {
            background-color: white;
            width: 500px;
            padding: 20px;

        }

        td>.price {
            white-space: pre;
        }

        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .text-center {
            text-align: center;
        }

        .text-capitalize {
            text-transform: capitalize;

        }

        .thank {
            font-size: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .product-image {
            width: 100%;
            height: auto;
        }

        th {
            padding: 10px;
        }

        .text-infomation {
            font-size: 16px;
            font-family: fantasy;
            font-style: italic;
            margin-bottom: 15px;
        }

        .head {
            text-align: center;
            color: white;
            padding: 15px;
            font-size: 20px;
            background: linear-gradient(to right, #da8cff, #9a55ff);
            margin-bottom: 20px;
        }

        .price-total {
            text-align: end;
            font-size: 20px;
            font-weight: 800;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="head">Order confirm</div>
        <div class="text-center">
            <img class="logo" src="{{url(asset('/images/5887.jpg'))}}" alt="">
        </div>
        <div class="text-center thank">
            Thank you, Minh
        </div>
        <div class="text-infomation text-center">
            Invoice Infomation
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Size</th>
                        <th scope="col">Color</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart_items as $cart_item)
                    <tr>
                        <th scope="row">1</th>
                        <td style="width:85px"><img class="product-image" src="{{$cart_item->product->thumbnail}}" alt=""></td>
                        <td>{{$cart_item->size->size}}</td>
                        <td class="text-capitalize">{{$cart_item->color->color}}</td>
                        <td class="text-center">{{$cart_item->quantity}}</td>
                        <td class="price">{{number_format($cart_item->price)}}₫ </td>
                        <td class="price">{{number_format($cart_item->amount)}}₫ </td>
                    </tr>
                    @endforeach
                    <tr>
                        <th scope="row">Total</th>

                        <td class="price-total" colspan="6">{{number_format($total)}} ₫ </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="head" style="margin-top: 20px;"><a class="btn" style="color:white" href="{{route('login')}}">Login</a> </div>
    </div>




</body>

</html>
