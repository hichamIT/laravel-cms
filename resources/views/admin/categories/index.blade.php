@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">

        {!! Form::open(['method' => 'POST','action' => 'AdminCategoriesController@store']) !!}

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
            {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    <div class="col-sm-6">

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <th><a href="{{route('admin.categories.edit',$category->id)}}">{{$category->name}}</a></th>
                        <th>{{$category->created_at->diffForHumans()}}</th>
                        <th>{{$category->updated_at->diffForHumans()}}</th>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    </div>
@endsection


