@extends('layouts.app')
@section('title', $post->title)

@section('content')
<div class="card z-depth-2">
    <div class="card-content">
        <h4>{{ $post->title }}</h4>
        <p class="grey-text">Published on {{ $post->created_at->format('d M, Y') }}</p>
        <hr>
        <p style="margin-top: 15px;">{{ $post->content }}</p>
    </div>
</div>
@endsection
