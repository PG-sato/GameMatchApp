<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')

        @section('content')
        
        <h1>ゲームマッチングサービスへようこそ</h1>
        <a href="/posts/clip">《クリップの投げ合いページ》</a>
        <a class="dropdown-item" href="/posts/prof">プロフィールの編集</a>
        
        
        @endsection
    </body>
</html>