<?php
?>
@extends('layout.main')

@section('content')
<h1>Listing the products</h1>
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
                <a href="/products/show/{{ $product->id }}">
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
