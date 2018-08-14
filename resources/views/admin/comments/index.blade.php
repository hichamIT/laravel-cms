@extends('layouts.admin')

@section('content')

    <h1>Comments</h1>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Email</th>
                <th>Post</th>
                <th>body</th>
            </tr>
            </thead>
            <tbody>
            @if($comments)
                @foreach($comments as $comment)
                    <tr>
                        <th>{{$comment->id}}</th>
                        <th>{{$comment->author}}</th>
                        <th>{{$comment->email}}</th>
                        <th><a href="{{route('post.home',$comment->post->id)}}"> View Post</a></th>
                        <th>{{$comment->body}}</th>
                        <th>
                            @if($comment->is_active == 1)

                                {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}


                                <input type="hidden" name="is_active" value="0">


                                <div class="form-group">
                                    {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                                </div>
                                {!! Form::close() !!}

                            @else

                                {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}


                                <input type="hidden" name="is_active" value="1">


                                <div class="form-group">
                                    {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                                </div>
                                {!! Form::close() !!}

                            @endif

                        <td>


                            {!! Form::open(['method'=>'DELETE', 'action'=> ['PostCommentsController@destroy', $comment->id]]) !!}


                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}



                        </td>

                        </th>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

@endsection