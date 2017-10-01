@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>Title: {{$post->title}}</h1>
    <br><br>
    <div>
        <p>Description: {{$post->body}}<p>
    </div>

    <hr>
    <div class="row">
      <h3>Reviews:</h3>
      <div class="col-md-8 col-md-offset-2">
        @foreach($post->reviews as $review)
        <div class="reviews">
          <li><strong>Review:</strong> {{ $review->body}}</li>
          <hr>
        </div>
        @endforeach
      </div>
    </div>

    <div class="row">
      <div id="review-form">
        {{Form::open(['route' => ['reviews.store', $post->id], 'method' => 'POST']) }}
        <div class="row">
          <div class="col-md-6">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', null, ['class' => 'form-control']) }}
            {{ Form::submit('Add Review', ['class' => 'btn btn-success btn-block' ]) }}
          </div>
        </div>

        {{Form::close() }}
      </div>
    </div>
@endsection
