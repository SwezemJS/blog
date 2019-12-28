@include('head')
	<style media="screen">
			.add-button {
				width: 100%;
			}
	</style>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		@include('sbar')
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">
					<div class="row row-bottom-padded-md">
						<div class="">
							<a href="{{route('n_post')}}" class="add-button btn btn-primary" name="button">New post</a>
						</div>
				</h2>
				@foreach ($posts as $post)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="{{ route('post_view').'/'.$post->id }}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="{{ route('post_view').'/'.$post->id }}">{{ $post->title }}</a></h3>
								<p style="word-break: break-all; height:80px;">{{  mb_strimwidth(strip_tags($post->text), 0, 80, "...") }} </p>
								<hr>
								<p style="color:black;font-size: 14pt;"> Author : {{ $post->user->login }} </p>
								<p style="color:black;font-size: 10pt; float: right;"> {{ date("d.m.y",strtotime($post->created_at)) }}</p>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
