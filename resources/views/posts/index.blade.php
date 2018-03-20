@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    <br/>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <ul class="list-group"> 
                <li class="list-group-item"><a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a> 
                <small>Written on {{$post->created_at}}</small></li>      
            </ul>
            <br/>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection