@extends('master')

@section('content')

<div class="content">
    <h1>Add Product</h1>
    <form action="/products/store" method="post">

    	{!! csrf_field() !!}

    	<div>
    		<label for="name">Name:</label>
    		<input type="text" value="{{ old('name') }}" name="name" id="name">
    		@if($errors->first('name'))
    			<span><small>{{ $errors->first('name') }}</small></span>
    		@endif
    	</div>
    	<div>
    		<label for="price">Price:</label>
    		<input value="{{ old('price') }}" type="number" step=".01" name="price" id="price">
    		@if($errors->first('price'))
    			<span><small>{{ $errors->first('price') }}</small></span>
    		@endif
    	</div>
    	<div>
    		<label for="stock">Stock:</label>
    		<input value="{{ old('stock') }}" type="number" name="stock" id="stock">
    		@if($errors->first('stock'))
    			<span><small>{{ $errors->first('stock') }}</small></span>
    		@endif
    	</div>
    	<div>
    		<label for="description">Description:</label>
    		<textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
    		@if($errors->first('description'))
    			<span><small>{{ $errors->first('description') }}</small></span>
    		@endif
    	</div>

    	<input type="submit" value="Add">

    </form>

</div>

@endsection