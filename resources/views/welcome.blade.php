
@extends('layout')

@section('content')


<?php 

	function printStar() {
		return '<span><strong> &middot; </strong> &#9733; </span>';
	}

	function printReadTime() {
		return rand(1,10) . " min read";
	}

	function getShortContent($content) {
		return substr($content, 0, min(45, strlen($content))) . "...";
	}

?>
	<div class="row">
		<div class="col-5">
			<div style="margin-left: 10%;">
				<hr align="left" color="black" style="width: 80px; padding: 1px; margin-top:5px; margin-bottom:0px">
	    		<p style="color:black;">FEATURED</p>
				<?php $blogPanel = $posts[0]; ?>
				<h1><strong> {{ $blogPanel->title }} </strong></h1>
				<p> {{ getShortContent($blogPanel->content) }} </p>
				<p style="font-size:16px; margin-top: -15px"> 
					 {{ $blogPanel->name }} <?php echo printStar() . " " . printReadTime() ?> 
				</p>
			</div>
			<img src=' {{ $blogPanel->img }} ' / style="max-width:100%; margin-top:10px;">
		</div>

		<div class="col-7">
			<div class="row">
				@for ($x=1; $x < 4; $x++)
					<?php $blogPanel = $posts[$x] ?>
					<div class="col-4">
						<img src=' {{ $blogPanel->img }} ' style="max-width:100%;">
						<h1 style="font-size:22px;"><strong> {{ $blogPanel->title }} </strong></h1>
						<p style="font-size:18px;"> {{ getShortContent($blogPanel->content) }} </p>
						<p style="font-size:16px; margin-top: -15px"> {{ $blogPanel->name }} <?php printStar() ?> </p>
					</div>

				@endfor
			</div>
			<div class="row">
				<div class="col-4">
					<hr color="black" style="padding: 1px">
					@for ($x=4; $x < 7; $x++)
						<?php $blogPanel = $posts[$x] ?>
						<div>
							<h1 style="font-size:21px;"><strong> {{ $blogPanel->title }} </strong></h1>
							<p style="font-size:16px; margin-top: -5px; margin-bottom: -10px;"> {{ $blogPanel->name }} <?php printStar() ?> </p>
						</div>
						<hr width="50%" align="left">
						
					@endfor
				</div>
				<div class="col-8">

					<?php $blogPanel = $posts[7] ?>
					<img src='{{ $blogPanel->img }}' style="width:100%; margin-top:15px;">
					<h1><strong> {{ $blogPanel->title }}</strong></h1>
					<p> {{ getShortContent($blogPanel->content) }} <strong> &middot; </strong> {!! printReadTime() !!} </p><br>
				</div>

			</div>

		</div>

	</div>

	<style>
		#appealContent {
			background-color: #E8F3EC; 
			height: 350px;
			border-radius: 2px;
			width: 1000px;
			margin-left: 10%;
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
		
	    <div id="appealContent">
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

	 			<div id="appealImg" class="col-4">
	 				<img src="https://web.archive.org/web/20180302172600im_/https://cdn-images-1.medium.com/max/2000/1*TckFXfkU_bg0aADPYR_t7Q.png" />
	 			</div>
	 				
	 			</div>
	 		</div>
	    </div>


@endsection