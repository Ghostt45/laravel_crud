@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 style="text-align: center; margin: 30px 0px">New Task</h1>

        <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-group has-validation">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Write title" id="exampleInputEmail1">
                @error('name')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3 form-group has-validation">
                <label for="exampleInputEmail1" class="form-label">Details</label>
                <input type="text" name="details" class="form-control" placeholder="Write description" id="exampleInputEmail1">
                @error('details')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3 form-group has-validation">
                <label class="form-label">User</label>
                <select class="form-control" id="user_id" name="user_id">
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3 form-group has-validation">
                <label class="form-label">Project</label>
                <select class="form-control" id="project_id" name="project_id">
                    <option value="">Select Project</option>
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </select>
                @error('project_id')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <a href="{{route('tasks.index')}}" class="btn btn-primary">Return to main page</a>
            <button type="submit" class="btn btn-success">Create</button>
        </form>

    </div>

@endsection
