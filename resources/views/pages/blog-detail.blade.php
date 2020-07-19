@extends('layout.master')
@section('content')
<nav class="breadcrumb container">
    <a class="breadcrumb-item" href="/">Trang chủ</a>
    <a class="breadcrumb-item" href="/blogs">Blogs</a>
    <a class="breadcrumb-item active" href=""> {!!$blog->title!!}</a>
</nav>

<section class="blog-detail">
    <div class="container">
        <div class="d-flex justify-content-between">

            <h1> {{$blog->title}}
            </h1>
            <h5 class="date">
                {{$blog->getMonth()}}
            </h5>
        </div>
        <div class="col-10 p-5 m-2">
            <img class="img-fluid" src="{{$blog->thumbnail}}" alt="">
        </div>
        <div class="blog-content">
            {!!$blog->content!!}
        </div>

    </div>
    <div class="comment">
        <div class="container">
            <div class="coment-title mt-2 mb-4 ">
                Bình luận
            </div>
            <div class="comment_content d-flex">
                <div class="comment_ava">
                    @auth()
                    @if(Auth::user()->avatar)
                    <img class="img-fluid" src="{{'http://store.com/uploads/'.Auth::user()->avatar}}" alt="">
                    @else
                    @endif
                    <img class="img-fluid" src="/images/user.png" alt="">
                    @else
                    <img class="img-fluid" src="/images/user.png" alt="">
                    @endauth
                </div>
                <form style="width: 100%;" method="POST" action="{{route('comment.create')}}">
                    @csrf
                    <div class="comment_textarea">
                        <input type="text-area" value="" class="textarea" placeholder="Comment ..." name="body" required>
                        <p class="help text-danger mt-2">{{ $errors->first('body') }}</p>
                        <input name="commentable_id" value="{{$blog->id}}" hidden="">
                        <input name="commentable_type" value="posts" hidden="">
                    </div>
                    <div class="mt-2 d-flex justify-content-end">
                        <button type="submit" class="btn bg-store text-light">Comment</button>
                    </div>
                </form>
            </div>
            @if($blog->comments->count())
            @foreach($blog->comments as $comment)
            <div class="reply-comment mb-3 mt-3 position-relative">
                <div class="d-flex  mb-4">
                    <div class="reply-comment__image">
                        @if($comment->user->avatar)
                        <img class="img-fluid comment-image" src="{{'http://store.com/uploads/'.Auth::user()->avatar}}" alt="">
                        @else
                        <img class="img-fluid comment-image" src="/images/user.png" alt="">
                        @endif
                    </div>
                    <div class=" position-absolute comment-center">
                        <div class="d-flex heitht-20">
                            <div class="comment-name mr-2 font-weight-bold">{{$comment->user->name}}</div>
                            <p>
                                {{$comment->body}}
                            </p>
                            @auth
                            @if(Auth::user()->id === $comment->user_id)
                            <div class="dropdown">
                                <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ...
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{url('/comment/'.$comment->id)}}">Delete</a>
                                </div>
                            </div>
                            @endif
                            @endauth
                        </div>
                        @auth
                        <div>
                            <div onclick="replyComent({{$comment->id}})">Reply</div>
                        </div>
                        @endauth
                    </div>
                </div>
                <div class="comment_content  d-none" id="repply-commen-{{$comment->id}}">
                    <div class="comment_ava">
                        @auth()
                        @if(Auth::user()->avatar)
                        <img class="img-fluid" src="{{'http://store.com/uploads/'.Auth::user()->avatar}}" alt="">
                        @else
                        @endif
                        <img class="img-fluid" src="/images/user.png" alt="">
                        @else
                        <img class="img-fluid" src="/images/user.png" alt="">
                        @endauth
                    </div>
                    <form style="width: 100%;" method="POST" action="{{route('comment.create')}}">
                        @csrf
                        <div class="comment_textarea">
                            <input type="text-area" value="" class="textarea" placeholder="Comment ..." name="body" required>
                            <p class="help text-danger mt-2">{{ $errors->first('body') }}</p>
                            <input name="commentable_id" value="{{$blog->id}}" hidden="">
                            <input name="commentable_type" value="posts" hidden="">
                            <input name="parent_id" value="{{$comment->id}}" hidden="">
                        </div>
                        <div class="mt-3  mb-4 d-flex justify-content-end">
                            <button type="submit" class="btn bg-store text-light">Comment</button>
                        </div>
                    </form>
                </div>
                <div class="chilren-comment">
                    @foreach($comment->chilrens as $children)
                    <div class="mb-2">
                        <div class="d-flex chil-coment-postion">
                            <div class="reply-comment__image">
                                @if($children->user->avatar)
                                <img class="img-fluid comment-image" src="{{'http://store.com/uploads/'.Auth::user()->avatar}}" alt="">
                                @else
                                <img class="img-fluid comment-image     " src="/images/user.png" alt="">
                                @endif
                            </div>
                            <div class=" comment-center p-2 chil-comnet-absul ">
                                <div class="d-flex heitht-20">
                                    <div class="comment-name mr-2 font-weight-bold">{{$children->user->name}}</div>
                                    <p>
                                        {{$children->body}}
                                    </p>
                                    @auth
                                    @if(Auth::user()->id === $comment->user_id)
                                    <div class="dropdown">
                                        <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ...
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{url('/comment/'.$comment->id)}}">Delete</a>
                                        </div>
                                    </div>
                                    @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            @endforeach
            @endif
        </div>
    </div>

</section>
@endsection