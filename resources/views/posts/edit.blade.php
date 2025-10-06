@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="dashboard-container">

    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card hoverable z-depth-3">
                <div class="card-content">
                    <span class="card-title blue-text text-darken-2" style="font-weight:600;">
                        <i class="material-icons left">edit</i> Edit Post
                    </span>

                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @csrf
                        @method('PUT')

                        <div class="input-field">
                            <input id="title" type="text" name="title" value="{{ old('title', $post->title) }}" required>
                            <label for="title" class="active">Title</label>
                            @error('title') <span class="red-text">{{ $message }}</span> @enderror
                        </div>

                        <div class="input-field">
                            <textarea id="content" class="materialize-textarea" name="content" required>{{ old('content', $post->content) }}</textarea>
                            <label for="content" class="active">Content</label>
                            @error('content') <span class="red-text">{{ $message }}</span> @enderror
                        </div>

                        <div class="card-action right-align" style="padding-right:0;">
                            <button type="submit" class="btn waves-effect waves-light blue">
                                <i class="material-icons left">update</i> Update Post
                            </button>
                            <a href="{{ route('posts.index') }}" class="btn waves-effect waves-light grey">
                                <i class="material-icons left">arrow_back</i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
