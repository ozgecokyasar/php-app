<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LSAPP</title>

    </head>
    <body>


      <h1>Welcome to Ozge's first PHP app!</h1>
      <h2>Posts</h2>
      @if(count($posts) > 0)
         @foreach($posts as $post)
           <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
           <p>Written on:{{$post->created_at}}</p>
         @endforeach
         {{$posts->links()}}
       @else
       <h1>No Posts Found</h1>
       @endif

    </body>
</html>
