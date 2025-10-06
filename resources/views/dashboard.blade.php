@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card z-depth-2">
        <div class="card-content">
            <span class="card-title"><i class="material-icons left blue-text">home</i> Dashboard</span>
            <p>Welcome back, <strong>{{ auth()->user()->name }}</strong>! 👋</p>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l4">
            <div class="card blue white-text center-align">
                <div class="card-content">
                    <i class="material-icons large">article</i>
                    <h5>{{ $postsCount ?? 0 }} Posts</h5>
                    <p>Total Created</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
