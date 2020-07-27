@extends('layout.master')
@section('content')
<section class="blog">
    <div class="poster">
        @if($poster)
        <img class="img-fluid" src="{{asset('uploads/'.$poster->thumbnail)}}" alt="">
        @endif
    </div>
    <div class="container">
        @if($blogs->count())
        @foreach($blogs as $blog)
        <div class="blog-item">
            <div class="row">
                <div class="col-12 col-md-6 mb-2">
                    <img class="img-fluid" src="{{$blog->thumbnail}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="date"><span><a href="">Hot trend</a></span><span class="font-italic date-time"><span>{{$blog->getMonth()}}</<span></span>
                            <div>View:{{$blog->view}}</div>
                    </div>
                    <h4>
                        {!!$blog->title!!}
                    </h4>
                    <span class="content">
                        {!!$blog->description!!}
                    </span>
                    <div class="show-more">
                        <a href="{{url('blogs/'.$blog->slug)}}">Xem Thêm</a>
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
        <div class="lion-pagination">
            {{ $blogs->links() }}
        </div>

    </div>
</section>
@endsection
