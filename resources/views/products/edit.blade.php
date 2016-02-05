@extends('master')

@section('content')

<div class="content">
    <h1>Edit Product</h1>

    {{ Form::model($product) }}
    {{ Form::text('name') }}
    {{ Form::submit() }}
    {{ Form::close() }}

</div>

@endsection