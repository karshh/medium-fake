
@extends('layout')

@section('content')

@if ($posts->count() == 0)
	<div class="container" align="center">
		<p style="font-size:20px"> No posts made as of yet. Click <a href="/post/new">here</a> to make one!</p>
	</div>
@else

<div class="row">
	<div class="col-lg-5 col-md-12 col-sm-12">
		<div style="margin-left: 10%;">
			<hr align="left" color="black" style="width: 80px; padding: 1px; margin-top:5px; margin-bottom:0px">
    		<p style="color:black;">FEATURED</p>
			<?php $blogPanel = $posts[0]; ?>
			<a href="/post/{{$blogPanel->id}}">
				<h1><strong> {{ $blogPanel->title }} </strong></h1>
				<p> {{ getShortContent($blogPanel->content) }} </p>
			</a>
			<a href="/profile/{{$blogPanel->user_id}}">
				<p style="font-size:16px; margin-top: -15px"> 
					  {{ $blogPanel->user->name }} <?php echo printStar() . " " . printReadTime() ?> 
				</p>
			</a> 
		</div>
		<img src=' {{ $blogPanel->img }} ' / style="max-width:100%; margin-top:10px;">
	</div>

	<div class="col-lg-7 col-md-12 col-sm-12">
		<div class="row">
			@for ($x=1; $x < 4; $x++)
				<?php if ($posts->count() <= $x) break; ?>
				<?php $blogPanel = $posts[$x] ?>
				<div class="col-4">
					<a href="/post/{{$blogPanel->id}}">
						<img src=' {{ $blogPanel->img }} ' style="max-width:100%;">
						<h1 style="font-size:22px;"><strong> {{ $blogPanel->title }} </strong></h1>
						<p style="font-size:18px;"> {{ getShortContent($blogPanel->content) }} </p>
					</a>
					<a href="/profile/{{$blogPanel->user_id}}">
						<p style="font-size:16px; margin-top: -15px"> {{ $blogPanel->user->name }} <?php printStar() ?> </p>
					</a> 
				</div>

			@endfor
		</div>
		<div class="row">
			<div class="col-4">
				<hr color="black" style="padding: 1px">
				@for ($x=4; $x < 7; $x++)
					<?php if ($posts->count() <= $x) break; ?>
					<?php $blogPanel = $posts[$x] ?>
					<div>
						<a href="/post/{{$blogPanel->id}}">
							<h1 style="font-size:21px;"><strong> {{ $blogPanel->title }} </strong></h1>
						</a>
						<a href="/profile/{{$blogPanel->user_id}}">
							<p style="font-size:16px; margin-top: -5px; margin-bottom: -10px;"> {{ $blogPanel->user->name }} <?php printStar() ?> </p>
						</a> 
					</div>
					<hr width="50%" align="left">
					
				@endfor
			</div>
			<div class="col-8">
				@if ($posts->count() >= 7)
				<?php $blogPanel = $posts[7] ?>
				<a href="/post/{{$blogPanel->id}}">
					<img src='{{ $blogPanel->img }}' style="width:100%; margin-top:15px;">
					<h1><strong> {{ $blogPanel->title }}</strong></h1>
					<p> {{ getShortContent($blogPanel->content) }} <strong> &middot; </strong> {!! printReadTime() !!} </p><br>
				</a>
				@endif
			</div>

		</div>

	</div>

</div>

	<style>
		#appealContent {
			background-color: #E8F3EC; 
			height: 350px;
			border-radius: 2px;
			min-width: 1000px;
			margin-top: 50px;
		}

		#appealText p {
			font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
			color: black;
		}

		#appealText {
			margin-left: 30px;
			margin-top: 40px;
		}

		#appealText .nav button {
			margin-left: 5px;
		}

		#appealImg > img {
		 	max-width: 100%;
		 	margin-left: 225px;
		 	margin-top: 35px;
		}
	</style>
		
	    <div class="justify-content-center" id="appealContent">
	 		<div class="row">
	 			<div id="appealText" class="col-5">
	 				
	    			<h1 style="font-size: 40px;">Interesting ideas that set your mind in motion.</h1>
	    			<p>Hear directly from the people who know it best. From tech to politics to creativity and more — whatever your interest, we’ve got you covered.</p>
	    			<br />
	    			<nav class="nav">
					  <button type="button" class="btn btn-dark">Get Started</button>
					  <button type="button" class="btn btn-outline-dark">Learn More</button>
					</nav>
	 			</div>
	 				
	 			</div>
	 		</div>
	    </div>



@endif


@endsection