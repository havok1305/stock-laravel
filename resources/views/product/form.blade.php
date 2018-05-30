@extends('layout.main')

@section('content')

    <form method="post" action="{{ action('ProductController@add') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name"/>
        </div>
        <div class="form-group">
            <label for="value">Value</label>
            <input type="text" class="form-control" name="value" id="value"/>
        </div>
        <div class="form-group">
            <label for="unit">Unit</label>
            <input type="text" class="form-control" name="unit" id="unit"/>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Add</button>
    </form>

@endsection