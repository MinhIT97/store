@extends('layout.master')
@section('content')
<section class="login">
    <div class="container">
        <div class="login-head text-center"><span>Đăng nhập</span></div>
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class=" col-12 col-md-6 ">
                <form>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1">Password</label>
                        <label  class="login-item float-right" for=""> <a class="text-uppercase" href="">Forgot Password?</a></label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <!-- <div class="form-group form-check">
                <input   type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                    <button type="submit" class="btn btn-login">login</button>
                    <div class="register"><a href="">Tạo tài khoản</a></div>
                </form>

            </div>

            <div class="col-12  col-md-3"></div>
        </div>
    </div>
</section>
@endsection
