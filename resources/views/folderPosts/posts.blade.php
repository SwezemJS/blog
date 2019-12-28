@include('head')
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		@include('sbar')
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">
					<div class="row row-bottom-padded-md">
				</h2>
				@foreach ($posts as $post)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="{{ route('post_view').'/'.$post->id }}" class="blog-img"><img src="images/img-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#">{{ $post->title }}</a></h3>
								<span > {{ $post->create_at }} </span>
								<p style="word-break: break-all;">{{  mb_strimwidth(strip_tags($post->text), 0, 80, "...") }} </p>
								<a href="{{ route('post_view').'/'.$post->id }}" class="lead" style="border:1px solid black; padding: 10px;margin: 10px; width: 100%;">Подробнее<i class="icon-arrow-right3"></i></a>
								<hr>
								<p style="color:black;font-size: 14pt;"> Author : {{ $post->user->login }} </p>
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
