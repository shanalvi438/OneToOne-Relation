@extends('layouts.apps')

@section('title', 'Welcome')

@section('content')

<div
    class="table-responsive"
>
<div class="card-body">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
</div>
    <table
        class="table table-success"
    >
        <thead>
            <tr>
                <th scope="col">Column 1</th>
                <th scope="col">Column 2</th>
                <th scope="col">Column 3</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($value as $values)
            <tr class="">
                    
                <td scope="row">{{ $values->id }}</td>
                <td>{{ $values->data }}</td>
                <td>
                    <a href="{{ route('record.edit', ['id' => $values->id ]) }}" class="btn btn-secondary">
                        Edit
                    </a>
                    <form action="{{ route('delete.record', $values->id) }}" method="Post">
                        @csrf
                        @method('Delete')
                    <input type="submit" value="Delete" class="btn btn-success">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection