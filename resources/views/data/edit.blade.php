@extends('layouts.apps')


@section('title', 'Welcome')


@section('content')
        <form action="{{ route('record.update', ['id' => $value->id]) }}" method="post">
                @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="data"
                    value="{{$value->data}}"
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <input type="submit" value="Update">
        </form>
@endsection