@extends('layouts.apps')

@section('title', 'Welcome')

@section('content')
<h1>Vehicles</h1>
<table>
    <thead>
        <tr>
            <th>Model</th>
            <th>User Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->model }}</td>
                <td>{{ $vehicle->user->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection