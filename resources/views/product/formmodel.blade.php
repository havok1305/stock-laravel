<?php
?>

@extends('layout.main')

@section('content')

    {{ Form::model($product) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $product->name, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('value', 'Value') }}
            {{ Form::text('value', $product->value, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('unit', 'Unit') }}
            {{ Form::text('unit', $product->unit, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
        </div>
    {{ Form::close() }}

@endsection