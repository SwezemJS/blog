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
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Дата регистрации</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr @if (Auth::user()->login == $user->login) style="color:green;" @endif>
                <th scope="row">{{ $user->id }}</th>
                <td>
                  {{ $user->name }}</td>
                <td>{{ date("d.m.y",strtotime($user->created_at)) }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
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

	</body>
</html>
