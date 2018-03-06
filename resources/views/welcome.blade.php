
<?php  ?>

@extends('layout')

@section('content')

	
	<div class="row">
		<div class="col-5">

			<?php 
				$blogPanel = new BlogPanel();
				echo '<div style="margin-left: 10%;">';
				echo '<hr align="left" 
						  color="black" 
						  style="width: 80px; padding: 1px; margin-top:5px; margin-bottom:0px">
						  <p style="color:black;">FEATURED</p>';
				echo '<h1><strong>' . $blogPanel->title . '</strong></h1>' ;
				echo '<p>' . $blogPanel->data . '</p>';
				echo '<p style="font-size:16px; margin-top: -15px">' . $blogPanel->author . $blogPanel->printStar() . " " . $blogPanel->printReadTime() . '</p>';
				echo '</div>';
				echo '<img src=' . $blogPanel->featureimg .' / style="max-width:100%; margin-top:10px;">';
			?>
		</div>

		<div class="col-7">
			<div class="row">
				<?php
					for ($x=0; $x < 3; $x++) {

						$blogPanel = new BlogPanel();
						echo '<div class="col-4">';
						echo '<img src=' . $blogPanel->img .' / style="max-width:100%;">';
						echo '<h1 style="font-size:22px;"><strong>' . $blogPanel->title . '</strong></h1>' ;
						echo '<p style="font-size:18px;">' . $blogPanel->data . '</p>';
						echo '<p style="font-size:16px; margin-top: -15px">' . $blogPanel->author . $blogPanel->printStar() . '</p>';
						echo '</div>';
					}
				?>
			</div>
			<div class="row">
				<div class="col-4">
						<hr color="black" style="padding: 1px">
					<?php
						for ($x=0; $x < 3; $x++) {

							$blogPanel = new BlogPanel();
							echo '<div>';
							echo '<h1 style="font-size:21px;"><strong>' . $blogPanel->title . '</strong></h1>' ;
							echo '<p style="font-size:16px; margin-top: -5px; margin-bottom: -10px;">' . $blogPanel->author . $blogPanel->printStar() . '</p>';
							echo '</div><hr width="50%" align="left">';
						}
					?>
				</div>

				<div class="col-8">

					<?php 
						$blogPanel = new BlogPanel();
						echo '<img src=' . $blogPanel->thinimg .' / style="width:100%; margin-top:15px;">';
						echo '<h1><strong>' . $blogPanel->title . '</strong></h1>' ;
						echo '<p>' . $blogPanel->data . " <strong> &middot; </strong> " . $blogPanel->printReadTime() . '</p><br>';
					?>
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