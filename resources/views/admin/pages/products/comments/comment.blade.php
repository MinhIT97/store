@extends('admin.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Comments
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <button type="submit" class="btn btn-gradient-success mr-2" data-toggle="modal" data-target="#exampleModal">Create</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" id="comment-create" method="post">
                                    @csrf
                                    <div class="alert alert-danger" id="add-error-bag">
                                        <ul id="add-task-errors">
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Comment</label>
                                        <textarea  type="text" class="form-control" data-id="{{$product->id}}" id="exampleInputComment" aria-describedby="emailHelp" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="users">Users</label>
                                        <select name="user_id" id="user_id" class="form-control  form-control-sm  js-example-basic-single">
                                            @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (session('sucsess'))
                        <div class="alert alert-success">
                            {{ session('sucsess') }}
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Comment </th>
                                    <th> Users </th>
                                    <th>Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($product->comments->count())
                                @foreach($product->comments as $comment)
                                <tr>
                                    <td> {{$loop->index+1}}</td>
                                    <td> {{$comment->body}} </td>
                                    <td> {{$comment->user->name}} </td>
                                    <td>
                                        <!-- <a class="btn btn-gradient-info " href="{{ url('adminstore/products/comments/'.$comment->id )}}"></a> -->
                                        <button type="button" class="btn btn-success p-2" data-toggle="modal" data-target="#myModal-{{$comment->id}}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <div class="modal" id="myModal-{{$comment->id}}">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Comment</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('adminstore/products/comments/update/'.$comment->id )}}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="mb-3" for="exampleInputEmail1">Comment</label>
                                                                <textarea required name="body" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-gradient-danger p-2 ml-2" href="{{ url('adminstore/products/comments-delete/'.$comment->id )}}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <div>
                                    <p>Empty!</p>
                                </div>
                                @endif
                            </tbody>
                        </table>
                        <div class="mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
