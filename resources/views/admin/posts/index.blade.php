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
            <th>Post</th>
            <th>Comments</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <th><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></th>
                    <th><img src="{{$post->photo ? $post->photo->file : 'http://via.placeholder.com/50x50' }}"  height="50" width="50"></th>
                    <th>{{$post->category ? $post->category->name : 'uncategorized'}}</th>
                    <th>{{$post->title}}</th>
                    <th>{{$post->body}}</th>
                    <th><a href="{{route('post.home' ,$post->id)}}">View post</a></th>
                    <th><a href="{{route('admin.comments.show' ,$post->id)}}">View comments</a></th>
                    <th>{{$post->created_at->diffForHumans()}}</th>
                    <th>{{$post->updated_at->diffForHumans()}}</th>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection