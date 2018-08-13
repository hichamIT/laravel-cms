@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    {!! Form::open(['method' => 'POST','action' => 'AdminPostsController@store' , 'files' => true]) !!}

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
        {!! Form::select('category_id',['' => 'Choose Option'] + $categories , null , ['class' => 'form-control']) !!}
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
        {!! Form::submit('Create Post',['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection