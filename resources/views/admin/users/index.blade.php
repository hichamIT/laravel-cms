@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
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
            <th>{{$user->name}}</th>
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