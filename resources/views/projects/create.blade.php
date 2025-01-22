@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 style="text-align: center; margin: 30px 0px">New Project</h1>

        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-group has-validation">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Write title" id="exampleInputEmail1">
                @error('title')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3 form-group has-validation">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Write description" id="exampleInputEmail1">
                @error('description')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3 form-group has-validation">
                <label class="form-label">User</label>
                <select class="form-control" id="type" name="type">
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('type')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>


            <a href="{{route('projects.index')}}" class="btn btn-primary">Return to main page</a>
            <button type="submit" class="btn btn-success">Create</button>
        </form>

    </div>


@endsection
