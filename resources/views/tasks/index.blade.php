@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 style="text-align: center; margin: 30px 0px">Tasks</h1>
        <div class="col-sm-12">
            <a class="mr-2 btn btn-success" style="float: right; margin-bottom: 20px" href="{{ route('tasks.create') }}">Add Task</a>
        </div>

        <table class="table table-hover table-bordered table-striped">
            <tr>
                <th>id</th>
                <th>user_id</th>
                <th>project_id</th>
                <th>name</th>
                <th>details</th>
                <th>created_at</th>
                <th>status</th>
            </tr>

            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->user_id }}</td>
                    <td>{{ $task->project_id }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->details }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>
                        <form action="{{ route('task.status', ['task' => $task->id, 'action' => $task->completed ? 'incomplete' : 'complete']) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm {{ $task->completed ? 'btn-danger' : 'btn-success' }}" style="display: flex; justify-content: center; align-items: center;">
                                {{ $task->completed ? 'Incomplete' : 'Complete' }}
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection


