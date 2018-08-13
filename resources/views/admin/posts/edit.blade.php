@extends('layouts.admin')

@section('content')

    <h1>Update Post</h1>

    <div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->file : 'http://via.placeholder.com/400x400' }}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">

    {!! Form::model($post,['method' => 'PATCH','action' => ['AdminPostsController@update',$post->id] , 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title : ') !!}
        {!! Form::text('title', null , ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('title'))
        <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
    @endif


    <div class="form-group">
        {!! Form::label('category_id', 'Category : ') !!}
        {!! Form::select('category_id', $categories , null , ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('category_id'))
        <span class="help-block">
                    <strong>{{ $errors->first('category_id') }}</strong>
                </span>
    @endif


    <div class="form-group">
        {!! Form::label('photo_id', 'Photo : ') !!}
        {!! Form::file('photo_id', null , ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('photo_id'))
        <span class="help-block">
                    <strong>{{ $errors->first('photo_id') }}</strong>
                </span>
    @endif

    <div class="form-group">
        {!! Form::label('body', 'Description : ') !!}
        {!! Form::textarea('body',null,['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('body'))
        <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
    @endif

    <div class="form-group">
        {!! Form::submit('Update Post',['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE','action' => ['AdminPostsController@destroy',$post->id] , 'files' => true]) !!}

    <div class="form-group">
        {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection