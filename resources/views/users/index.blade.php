@extends('layouts.apps')

@section('title', 'Welcome')

@section('content')
    
<h1>Users</h1>
<a href="{{ route('users.create') }}">
Add User
</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection