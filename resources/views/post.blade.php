@extends('layout')

@section('content')
	
	<style>
		.post > h6 {
			margin-top: 20px;
			line-height: 50px;
		}

	</style>
	<div class="post container">
		
		
		<h1 style="font-size:300%">{{ $post->title }}</h1>
		<p> Author: {{$post->name}} </p>
		<hr />
		<img src='{{ $post->img }}' style="max-width:100%;" />

		<h6 style="font-size:125%"> {{ $post->content }} </h6>

		<hr />
		<br>
		<br>

	</div>

	<style>
	
	.commentRow {
		border-width: 10px;
    	border: 2px solid rgba(0,0,0,0.05);
		padding: 20px;
		margin: 20px 0px;

	}

	.commentRow p {
		line-height: 10px;
	}	

	.commentRow h6 {
		line-height: 30px;
	}	



	</style>

	<div class="container">
		<h3> Comments </h3>
		<form method="post" action="/comment/new">
			{{csrf_field()}}
			<input type="hidden" name="post_id" value="{{ $post->id }}">
	        @include('forms.textarea', [
	            'label' => '',
	            'name' => 'comment',
	            'rows' => '5'
	        ])

	        <input type="submit" name="" value="Submit">
		</form>


		<script>
			// function submitComment(form) {
			// 	$.ajax({
			// 		type:"POST",
			// 		url:"/comment/new",
			// 		headers: { 'X-CSRF-TOKEN': '{{csrf_token()}}' },
			// 		data: {'post_id': form.post_id.value, 'content': form.comment.value },
			// 		success: (msg) => console.log(msg)
			// 	});
			// }

		</script>
		<div class="commentsContainer">
			@foreach($comments as $comment)
				<div class="commentRow">
					<p> {{ $comment->name }} </p>
					<p> {{ $comment->updated_at }} </p>
					<h6 style="font-size:110%"> {{ $comment->content }} </h6>
				</div>
			@endforeach
		</div>

	</div>


@endsection