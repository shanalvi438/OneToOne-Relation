@extends('layouts.apps')

@section('title', 'Welcome');
<style>
    .container {
        display: flex;
        justify-content: center;
        /* Center horizontally */
        align-items: center;
        /* Center vertically */
        height: 100vh;
    }

    .border {
        height: 500px;
    }
</style>
@section('content')

    <div class="container border border-danger border-2">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <button type="submit">Create User</button>
        </form>
    </div>



@endsection
