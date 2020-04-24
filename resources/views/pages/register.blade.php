@extends('layout.master')
@section('content')
<section class="login">
    <div class="container">
        <div class="login-head text-center"><span>Đăng nhập</span></div>
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class=" col-12 col-md-6 ">
                <form method="POST" action="{{ route('register') }}">
                    <!-- <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">Surname</label>
                        <input type="text" class="form-control " id="surname" aria-describedby="emailHelp">
                    </div> -->
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name" aria-describedby="emailHelp">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  required name="email" id="email1" aria-describedby="emailHelp">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1">Password</label>
                        <input type="password"  required class="form-control" name="password" id="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label class="login-item" for="exampleInputPassword1">Enter your password again</label>
                        <input type="password" required class="form-control @error('password') is-invalid @enderror"  name="password_confirmation" id="passwordagain">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-login">Create account</button>
                    <div class="register"><a href="{{route('login')}}">Đăng nhập</a></div>
                    @csrf
                </form>
            </div>
            <div class="col-12  col-md-3"></div>
        </div>
    </div>
</section>
@endsection
