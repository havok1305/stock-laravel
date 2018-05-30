<?php
?>
@extends('layout.main')

@section('content')
<h1>Product Details</h1>
<ul class="list-group">
    <li class="list-group-item">
        <strong>Name: </strong> {{ $product->name or "No name informed" }}
    </li>
    <li class="list-group-item">
        <strong>Value: R$</strong> {{ $product->value or "0.00" }}
    </li>
    <li class="list-group-item">
        <strong>Unit: </strong> {{ $product->unit or "No unit informed" }}
    </li>
</ul>
@endsection
