@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
        <tr>
            <th>{{$user->id}}</th>
            <th><img src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/50x50' }}" alt="" height="50" width="50"></th>
            <th><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></th>
            <th>{{$user->email}}</th>
            <th>{{$user->role->name}}</th>
            <th>{{$user->is_active == 0 ? 'Not Active' : 'Active'}}</th>
            <th>{{$user->created_at->diffForHumans()}}</th>
            <th>{{$user->updated_at->diffForHumans()}}</th>
        </tr>
            @endforeach
         @endif
        </tbody>
    </table>
@endsection