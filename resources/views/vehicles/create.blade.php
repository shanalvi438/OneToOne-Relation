@extends('layouts.apps')

@section('title', 'Welcome')
    
@section('content')
<div class="card-body">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
</div>    
<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf
    <label for="model">Model:</label>
    <input type="text" name="model" id="model">
    <label for="user_id">User ID:</label>
    {{-- @foreach ($vehicles as $item) --}}
    <input type="text" name="user_id" id="user_id" value="{{ $data->id }}">
    {{-- @endforeach --}}
    <button type="submit">Create Vehicle</button>
</form>
@endsection