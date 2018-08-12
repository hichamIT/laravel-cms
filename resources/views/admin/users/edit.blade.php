@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>

    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/400x400' }}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">

    {!! Form::model($user,['method' => 'PATCH','action' => ['AdminUsersController@update',$user->id] , 'files' => true]) !!}

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
        {!! Form::select('role_id',['' => 'Choose Option'] + $role , null , ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('role_id'))
        <span class="help-block">
            <strong>{{ $errors->first('role_id') }}</strong>
        </span>
    @endif

    <div class="form-group">
        {!! Form::label('is_active', 'status : ') !!}
        {!! Form::select('is_active', [ 1=>'Active' , 0=>'Not Active'] , null, ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('is_active'))
        <span class="help-block">
                    <strong>{{ $errors->first('is_active') }}</strong>
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
        {!! Form::label('password', 'Password : ') !!}
        {!! Form::password('password',['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('password'))
        <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
    @endif

    <div class="form-group">
        {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    </div>
@endsection


