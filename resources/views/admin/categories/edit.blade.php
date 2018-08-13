@extends('layouts.admin')

@section('content')

    <h1>Edit Categories</h1>



        {!! Form::model($category,['method' => 'PATCH','action' => ['AdminCategoriesController@update',$category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name : ') !!}
            {!! Form::text('name', null , ['class' => 'form-control']) !!}
        </div>
        @if ($errors->has('name'))
            <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        <div class="form-group">
            {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    {!! Form::open(['method' => 'DELETE','action' => ['AdminCategoriesController@destroy',$category->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}

@endsection


