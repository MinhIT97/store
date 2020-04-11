@extends('layout.master')
@section('content')
<section class="blog">
    <div>
        <img class="img-fluid" src="/images/25041.jpg" alt="">
    </div>
    @if($blogs)

    <div class="container">
        <div class="blog-item">
            {!!$blogs->content!!}
        </div>
        @else
        <div>
            Bạn vui lòng quay lại sau.
        </div>
        @endif
    </div>
</section>
@endsection
