@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard-container">

    <div class="row">
        <div class="col s12">
            <h4 class="blue-text text-darken-2" style="font-weight:600;">
                <i class="material-icons left">dashboard</i> Blog Posts
            </h4>
            <a href="{{ route('posts.create') }}" class="btn waves-effect waves-light blue right" style="margin-top:-45px;">
                <i class="material-icons left">add_circle</i> New Post
            </a>
        </div>
    </div>

    <div class="row">
        @forelse($posts as $post)
            <div class="col s12 m6 l4">
                <div class="card hoverable z-depth-2">
                    <div class="card-content">
                        <span class="card-title truncate" style="font-weight:600;">
                            <i class="material-icons left blue-text text-darken-2">article</i> {{ $post->title }}
                        </span>
                        <p class="grey-text" style="font-size: 0.9rem;">
                            by <strong>{{ $post->user->name }}</strong> <br>
                            <span>{{ $post->created_at->format('M d, Y') }}</span>
                        </p>
                        <p class="truncate" style="margin-top: 10px;">{{ Str::limit($post->content, 100) }}</p>
                    </div>

                    <div class="card-action" style="display:flex; justify-content:space-between;">
                        <a href="{{ route('posts.show', $post) }}" class="btn-small waves-effect blue lighten-1">
                            <i class="material-icons left">visibility</i> View
                        </a>

                        {{-- ✅ Show edit/delete only if current user owns the post --}}
                        @if (auth()->check() && auth()->id() === $post->user_id)
                            <div>
                                <a href="{{ route('posts.edit', $post) }}" class="btn-small green lighten-1">
                                    <i class="material-icons">edit</i>
                                </a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-small red lighten-1">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col s12">
                <div class="card grey lighten-4 center-align">
                    <div class="card-content">
                        <h6 class="grey-text">No posts found.</h6>
                        <a href="{{ route('posts.create') }}" class="btn blue waves-effect waves-light">
                            <i class="material-icons left">add_circle</i> Create Your First Post
                        </a>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

</div>
@endsection
