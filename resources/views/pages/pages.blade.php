@extends('layout.master')
@section('content')
<section class="blog">



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
