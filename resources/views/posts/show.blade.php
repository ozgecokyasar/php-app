<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LSAPP</title>

    </head>
    <body>
      <nav>
          <li><a href="/posts">Go back to the HomePage</a></li>
      </nav>
      <h1>Post title: {{$post->title}}</h1>
      <p>body: {{$post->body}}</p>
      <hr>
      <p>created at: {{$post->created_at}}</p>

    </body>
</html>