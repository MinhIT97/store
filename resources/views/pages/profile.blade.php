@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thông tin tài khoản</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        {{ Auth::user()->name }}
                    </div>
                    <div>
                        {{ Auth::user()->email }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
