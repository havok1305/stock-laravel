@extends('layout.main')

@section('content')
    @if($inserted)
        <div class="alert alert-success">
            <p>Product <strong>{{$name}}</strong> added to the database with success!</p>
        </div>
        <a type="button" href="/products/addform" class="btn btn-success">New</a>
        <a type="button" href="/products" class="btn btn-primary">List</a>
    @else
        <div class="alert alert-danger">
            <p>An error has occurred while trying to insert the new product!</p>
        </div>
    @endif
@endsection