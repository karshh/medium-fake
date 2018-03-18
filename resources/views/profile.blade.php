@extends('layout')

@section('content')

	<div class="post container">
	
		<h1 style="font-size:200%">{{ $user->name }}</h1>
		<p> Medium member since {{$user->created_at->format('d M Y')}} </p>
		<hr>


		<style>
		
		
		a {
			color:black;
		}
		a:hover {
			color: black;
			text-decoration: line-under;
		}

		.profileRow {
			border-width: 10px;
	    	border: 2px solid rgba(0,0,0,0.05);
			padding: 20px;
			margin: 20px 10px;

		}

		.profileRow p {
			line-height: 10px;
		}	

		.profileRow h6 {
			line-height: 30px;
		}	



		</style>

		<h2> Posts </h2>
        @if (Auth::check() and Auth::user()->id == $user->id)
        	<p> Click <a href="/post/create"> here </a> to create a post! </a>
        @endif
		@if ($user->posts->count() == 0)
			<p> No posts made as of yet... </p>
		@else
			<div class="row profileDiv">
					@foreach($user->posts as $post)

						<div class="profileRow col-3">
							<a href="/post/{{$post->id}}">
								<h4> {{ getShortContent($post->title) }} </h4>
								<p> Created on {{ $post->updated_at->format('d M Y') }} </p>
								<h6 style="font-size:110%"> {{ getShortContent($post->content) }} </h6>
							</a>
						</div>
					@endforeach
			</div>

		@endif
		
		<hr>
		
		<h2> Comments </h2>
		@if ($user->comments->count() == 0)
			<p> No comments made as of yet... </p>
		@else
				<div class="row profileDiv">
					@foreach($user->comments as $comment)
							<div class="profileRow col-3">
								<a href="/post/{{$comment->post_id}}">
									<h4> {{ getShortContent($comment->post->title) }} </h4>
									<h6 style="font-size:110%"> "{{ getShortContent($comment->content) }}" </h6>
									<p> On {{ $comment->updated_at->format('d M Y') }} </p>
								</a>
							</div>
					@endforeach

				</div>
		@endif
		<br><br>



	</div>


@endsection