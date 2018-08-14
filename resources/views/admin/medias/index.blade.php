@extends('layouts.admin')

@section('content')

    @if(Session::has('delete_user'))
        <p class="bg-danger">{{session('delete_user')}}</p>
    @endif
    <h1>All Medias</h1>

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
        @if($photos)
            @foreach($photos as $photo)
                <tr>
                    <th>{{$photo->id}}</th>
                    <th><img src="{{$photo->file}}" alt="" height="50" width="50"></th>
                    <th>{{$photo->created_at->diffForHumans()}}</th>
                    <th>{{$photo->updated_at->diffForHumans()}}</th>
                    <th>
                        {!! Form::open(['method' => 'DELETE','action' => ['AdminMediasController@destroy',$photo->id] ]) !!}

                            <div class="form-group">
                                {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                            </div>
                        {!! Form::close() !!}
                    </th>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection