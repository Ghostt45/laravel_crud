@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 style="text-align: center; margin: 30px 0px">New User</h1>

        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-group has-validation">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Write your name" id="exampleInputEmail1">
                @error('name')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3 form-group has-validation">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Write your email" id="exampleInputEmail1">
                @error('email')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="formFile" class="form-label">Choose file</label>
                <input class="form-control" type="file" id="formFile" name="image">
                @error('image')
                <div class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <a href="{{route('users.index')}}" class="btn btn-primary">Return to main page</a>
            <button type="submit" class="btn btn-success">Create</button>
        </form>

    </div>


@endsection
