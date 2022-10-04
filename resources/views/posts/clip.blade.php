<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/styleclip.css">
    </head>
    <body>
        <center><h1>クリップページ</h1></center>
        @foreach($posts as $post)
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>{{ $post->img_title }}</h2>
                <p class='body'>{{ $post->img_comment }}</p>
                <video width="500" src="{{ $post->img_path }}" controls loop autoplay=0 muted></video>
            </div>
        </div>
        <br>
        @endforeach
        <div class='create'>
            <a href='/posts/create'>《クリップを投稿する》</a>
        </div>
        <div class='back'>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>