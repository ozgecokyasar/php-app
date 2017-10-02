@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
      <h1>Welcome to ozge's first Laravel app</h1>
      @if (Auth::guest())
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
      @else
      <p><a href="/posts">See Posts</a></p>
      @endif
    </div>
@endsection
