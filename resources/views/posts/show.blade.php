@extends('layouts.app')  <!-- レイアウトを指定 -->

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<a href="{{ route('posts.index') }}">ブログ投稿一覧画面に戻る</a>
@endsection
