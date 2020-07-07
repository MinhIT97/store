@extends('layout.master')
@section('content')
<section class="login">
    <div class="container">
        <div class="login-head text-center"><span>Đăng nhập</span></div>
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class=" col-12 col-md-6 ">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control " name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1" id="password" type="password" name="password" required autocomplete="current-password">Password</label>
                        <label class="login-item float-right" for=""> @if (Route::has('password.request')) <a class="text-uppercase" href="{{ route('password.request') }}">Forgot Password?</a> @endif</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 ">
                            <div class="form-check d">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-login">login</button>
                    <div class="login-socical d-flex justify-content-around mb-4">
                        <a class="btn login-facebook" href="redirect/facebook"> <i class="fab fa-facebook-square  fa-2x"></i></a>
                        <a class="btn login-google" href="redirect/google"> <i class="fab fa-google-plus fa-2x"></i></a>
                        <a class="btn ogin-twitter" href="redirect/twitter"> <i class="fab fa-twitter-square fa-2x "></i></i></a>
                        <a class="btn ogin-github" href="redirect/github"><i class="fab fa-github fa-2x"></i></i></i></a>
                    </div>

                    <div class="register"><a href="{{route('register')}}">Tạo tài khoản</a></div>

                </form>

            </div>

            <div class="col-12  col-md-3"></div>
        </div>
    </div>
</section>
@endsection
