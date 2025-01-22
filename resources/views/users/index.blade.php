@extends('layouts.app')

@section('content')
    <div class="container">

            <h1 style="text-align: center; margin: 30px 0px">Users</h1>
            <div class="col-sm-12">
                <a class="mr-2 btn btn-success" style="float: right; margin-bottom: 20px" href="{{ route('users.create') }}">Add User</a>
            </div>


            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>created_at</th>
                    <th>view</th>
                </tr>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                                <a href="{{ route('user.viewImage', $user->id) }}" class="btn btn-info">View Image</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
@endsection
