@extends('layouts.app')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{$title}}</h1>
          <p class="lead text-muted">This is the laravel application from the "Laravel From Scratch" Youtube series</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Login</a>
            <a href="#" class="btn btn-secondary my-2">Register</a>
          </p>
        </div>
    </section>
@endsection