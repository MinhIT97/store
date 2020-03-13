@extends('admin.layouts.app', ['class' => 'admin-lion', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<div class="admin-lion">
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card card-login card-hidden mb-3">
                    <div class="card-header card-header-primary text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin-login')}}" method="post">
                            <small id="emailHelpId" class="form-text text-center text-muted mb-2">Or Sign in with admin@material.com and the password secret</small>
                            <div class="form-group">
                                <span class="input-group-text">
                                    <i class="material-icons">email</i>
                                </span>
                                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input type="password" class="form-control" name="password" id="" placeholder="">
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn text-uppercase btn-link">Lests go</button>
                            </div>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
