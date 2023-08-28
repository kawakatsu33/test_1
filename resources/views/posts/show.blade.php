@extends('layouts.app')  <!-- レイアウトを指定 -->

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>

<a href="/posts/{{ $post->id }}/edit">edit</a>
<div>
    <a href="{{ route('posts.index') }}">戻る</a>
</div>

@endsection
