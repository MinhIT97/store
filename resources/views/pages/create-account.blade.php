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
                        <label class="login-item" for="exampleInputEmail1">Surname</label>
                        <input type="text" class="form-control " id="surname" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control " id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control " id="email1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1">Enter your password again</label>
                        <input type="password" class="form-control" id="passwordagain">
                    </div>
                    <!-- <div class="form-group form-check">
                <input   type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                    <button type="submit" class="btn btn-login">Create account</button>
                    <div class="register"><a href="">Đăng nhập</a></div>
                </form>

            </div>

            <div class="col-12  col-md-3"></div>
        </div>
    </div>
</section>
@endsection
