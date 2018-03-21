@extends('layouts.app')

@section('content')
<a href="/posts" ><button type="button" class="btn btn-outline-secondary">Back</button></a>
<br><br>
   <h1>{{$post->title}}</h1> 
   <div>
       {!!$post->body!!}
   </div>
   <hr>
   <small>Written on {{$post->created_at}}</small>
   <hr>
<a href="/posts/{{$post->id}}/edit"><button type="button" class="btn">Edit</button></a>

   {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
   {!!Form::close()!!}
@endsection