@extends('master')

@section('content')

<div class="content">
    <h1>Contact</h1>
    <form action="/contact" method="post">
    	<div>
    		<label for="email">Email:</label>
    		<input type="email" name="email" id="email">
    	</div>
    	<div>
    		<label for="message">Message:</label>
    		<textarea name="message" id="message" cols="30" rows="10"></textarea>
    	</div>
    	<input type="submit" value="send">
    </form>
</div>

@endsection