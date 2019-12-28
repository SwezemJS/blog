@include('head')
	<body >
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		@include('sbar')
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">
					<div class="row row-bottom-padded-md">
				</h2>
				<form action="{{ route('add_post') }}" method="POST">
					@csrf
					<input type="text" name="title" style="width: 100%; margin:25px 0 25px 0; font-size: 20pt;" placeholder="Заголовок" required>
					<textarea id="text" name="text" required></textarea>
					<input type="submit" class="btn btn-primary" value="Опубликовать">
				</form>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>

	<script src="../js/summernote.min.js"></script>
	<script src="../js/lang/summernote-ru-RU.js"></script>
	<!-- MAIN JS -->
	<script src="../js/main.js"></script>
	<script>
		jQuery(function($) {
			$('#text').summernote({
				fontSizes: ['12', '14', '16', '18', '24', '36', '48'],
				placeholder:'Уже пишешь?',
				minHeight:300,
				lang:'ru-RU',
				codemirror: { // codemirror options
				    theme: 'monokai'
				  }
			}).summernote('fontSize', 20).summernote('color','black');
		});

	</script>
	</body>
</html>

