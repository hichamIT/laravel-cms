@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>photo</th>
            <th>category</th>
            <th>title</th>
            <th>body</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <th>{{$post->user->name}}</th>
                    <th><img src="{{$post->photo ? $post->photo->file : 'http://via.placeholder.com/50x50' }}"  height="50" width="50"></th>
                    <th>{{$post->category_id}}</th>
                    <th>{{$post->title}}</th>
                    <th>{{$post->body}}</th>
                    <th>{{$post->created_at->diffForHumans()}}</th>
                    <th>{{$post->updated_at->diffForHumans()}}</th>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection