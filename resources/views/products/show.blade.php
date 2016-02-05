@extends('master')

@section('content')

<div class="content">
	<h1>{{ $product['name'] }}</h1>
	<h3>${{ $product['price'] }}</h3>
	<p>{{ $product['description'] }} Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
	<h3>Stock: {{ $product['stock'] }}</h3>
	<br>
    <a href="/products/{{ $product->id }}/edit">x Edit product</a>
</div>

@endsection