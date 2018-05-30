@extends('layout.main')

@section('content')
    @if($product->exists)
        <form method="post" action="{{ action('ProductController@update', ['id'=>$product->id]) }}">
            <input type="hidden" value="{{ $product->id }}">
    @else
        <form method="post" action="{{ action('ProductController@add') }}">
    @endif
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $product->name) }}"/>
        </div>
        <div class="form-group">
            <label for="value">Value</label>
            <input type="text" class="form-control" name="value" id="value" value="{{ old('value', $product->value) }}"/>
        </div>
        <div class="form-group">
            <label for="unit">Unit</label>
            <input type="text" class="form-control" name="unit" id="unit" value="{{ old('unit', $product->unit) }}"/>
        </div>

        <button type="submit" class="btn btn-primary btn-block">{{ $product->exists ? "Update" : "Add" }}</button>
    </form>

@endsection