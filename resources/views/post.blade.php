@extends('layout')

@section('content')
	
	<style>
		.container, .container > h1, .container > p {
			margin-top: 20px;
		}

	</style>
	<div class="container">
		
		
		<p> Author: {{$post->name}} </p>
		<hr />
		<h1 style="font-size:300%">{{ $post->title }}</h1>
		<img src='{{ $post->img }}' style="max-width:100%;" />

		<p style="font-size:150%"> {{ $post->content }} </p>

		<hr />
		<br>
		<br>
		<h3> Comments </h3>

	</div>


@endsection