@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>

    {!! Form::open(['method' => 'POST','action' => 'AdminUsersController@store']) !!}

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
            {!! Form::label('email', 'Email : ') !!}
            {!! Form::email('email',null , ['class' => 'form-control']) !!}
        </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        <div class="form-group">
            {!! Form::label('role_id', 'Role : ') !!}
            {!! Form::select('role_id',['' => 'Choose Option'] + $roles , null , ['class' => 'form-control']) !!}
        </div>
            @if ($errors->has('role_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('role_id') }}</strong>
                </span>
            @endif

        <div class="form-group">
            {!! Form::label('is_active', 'status : ') !!}
            {!! Form::select('is_active', [ 1=>'Active' , 0=>'Not Active'] , 0 , ['class' => 'form-control']) !!}
        </div>
            @if ($errors->has('is_active'))
                <span class="help-block">
                    <strong>{{ $errors->first('is_active') }}</strong>
                </span>
            @endif

        <div class="form-group">
            {!! Form::label('file', 'Photo : ') !!}
            {!! Form::file('file',null , ['class' => 'form-control']) !!}
        </div>
            @if ($errors->has('file'))
                <span class="help-block">
                    <strong>{{ $errors->first('file') }}</strong>
                </span>
            @endif

        <div class="form-group">
            {!! Form::label('password', 'Password : ') !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        <div class="form-group">
            {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection


