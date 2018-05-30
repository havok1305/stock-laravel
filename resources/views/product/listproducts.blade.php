<?php
?>
@extends('layout.main')

@section('content')
<h1>Listing the products</h1>
@if(!empty( old('inserted') ))
    @if( old('inserted') )
        <div class="alert alert-success">
            <p>Product <strong>{{ old('name') }}</strong> added to the database with success!</p>
        </div>
    @else
        <div class="alert alert-danger">
            <p>An error has occurred while trying to insert the new product!</p>
        </div>
    @endif
@endif
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @forelse ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>
                <a href="{{ action('ProductController@show', ['id'=>$product->id]) }}">
                    <span class="glyphicon glyphicon-search"></span>Show
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No data found</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection
