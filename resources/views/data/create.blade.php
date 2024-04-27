@extends('layouts.apps')

@section('title', 'Welcome')

@section('content')

    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form> --}}

        <div class="container">
            <form method="POST" action="{{ route('store.data') }}">
                @csrf
                <div class="mb-3 row">
                    <label
                        for="inputName"
                        class="col-4 col-form-label"
                        >Name</label
                    >
                    <div
                        class="col-8"
                    >
                        <input
                            type="text"
                            class="form-control"
                            name="data"
                            id="inputName"
                            placeholder="Name"
                        />
                    </div>
                </div>
                <fieldset class="mb-3 row">
                    <legend
                        class="col-form-legend col-4"
                    >
                        Group name
                    </legend>
                    <div
                        class="col-8"
                    >
                        you can use radio and checkboxes here
                    </div>
                </fieldset>
                <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                        <input
                            name=""
                            id=""
                            class="btn btn-primary"
                            type="submit"
                            value="Button"
                        />
                        
                    </div>
                </div>
            </form>
        </div>
    <!-- Add more content here -->
@endsection
