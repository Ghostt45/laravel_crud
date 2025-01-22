@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header">
            <h1 style="text-align: center; margin: 30px 0px">Projects</h1>
            <div class="col-sm-12">
                <a class="mr-2 btn btn-success" style="float: right; margin-bottom: 20px" href="{{ route('projects.create') }}">Add Project</a>
            </div>
        </div>

        <table class="table table-hover table-bordered table-striped">
            <tr>
                <th>id</th>
                <th>user_id</th>
                <th>title</th>
                <th>description</th>
                <th>created_at</th>
            </tr>

            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->user_id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->created_at }}</td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
