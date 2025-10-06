@extends('layouts.app')
@section('title', 'Create New Post')

@section('content')
<div class="card z-depth-2">
    <div class="card-content">
        <span class="card-title"><i class="material-icons left">add_circle</i> Create New Post</span>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="input-field">
                <input type="text" id="title" name="title" value="{{ old('title') }}" required>
                <label for="title">Title</label>
                @error('title')<span class="red-text">{{ $message }}</span>@enderror
            </div>

            <div class="input-field">
                <textarea id="content" name="content" class="materialize-textarea" required>{{ old('content') }}</textarea>
                <label for="content">Content</label>
                @error('content')<span class="red-text">{{ $message }}</span>@enderror
            </div>

            <button type="submit" class="btn waves-effect blue">
                <i class="material-icons left">save</i> Publish
            </button>
        </form>
    </div>
</div>
@endsection
