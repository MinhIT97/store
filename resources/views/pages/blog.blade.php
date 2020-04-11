@extends('layout.master')
@section('content')
<section class="blog">
    <div>
        <img class="img-fluid" src="/images/25041.jpg" alt="">
    </div>
    @if($blogs->count())
    @foreach($blogs as $blog)
    <div class="container">
        <div class="blog-item">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="/images/2007.jpg" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="date"><span><a href="">Hot trend</a></span><span class="font-italic date-time"><span>{{$blog->getMonth()}}</<span></span></div>
                    <h4>
                        {!!$blog->title!!}
                    </h4>
                    <span class="content">
                        {!!$blog->content!!}
                    </span>
                    <div class="show-more">
                        <a href="">Xem Thêm</a>
                        <span><i class="fas fa-chevron-circle-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div>
            Bạn vui lòng quay lại sau.
        </div>
        @endif




{{ $blogs->links() }}
    </div>
</section>
@endsection
