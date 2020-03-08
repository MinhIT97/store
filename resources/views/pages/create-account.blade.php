@extends('layout.master')
@section('content')
<section class="login">
    <div class="container">
        <div class="login-head text-center"><span>Đăng nhập</span></div>
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class=" col-12 col-md-6 ">
                <form method="post" action="">
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">Surname</label>
                        <input type="text" class="form-control " id="surname" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control " name="name" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control " name="email" id="email1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1">Enter your password again</label>
                        <input type="password" class="form-control" name="passwordagain" id="passwordagain">
                    </div>
                    <button type="submit" class="btn btn-login">Create account</button>
                    <div class="register"><a href="">Đăng nhập</a></div>
                    @csrf
                </form>
            </div>
            <div class="col-12  col-md-3"></div>
        </div>
    </div>
</section>
@endsection
