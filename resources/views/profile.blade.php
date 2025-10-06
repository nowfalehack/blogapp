@extends('layouts.app')

@section('content')
    <h2>Profile</h2>
    <div class="card-custom">
        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
    </div>
@endsection
