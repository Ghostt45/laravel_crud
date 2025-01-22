@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h1>View User Image</h1>

        @isset($user->image)
            <img src="{{ asset('storage/' . $user->image) }}" class="img-fluid" alt="User Image" style="width: 800px; height: 800px">
        @else
            <p>No image available.</p>
        @endisset

        <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back to Users</a>
    </div>

@endsection
