<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

	<h1 id="fh5co-logo"><a href="{{ route('index') }}">Malder</a></h1>
	
	<nav id="fh5co-main-menu" role="navigation">
		<ul>
			<li><a href="{{ route('index') }}">Home</a></li>
			<li><a href="{{ route('posts') }}">Блог</a></li>
			@if (Auth::check())  
				<li><a href="{{ route('logout') }}" 
					onclick="event.preventDefault();
                	document.getElementById('logout-form').submit();">{{ __('Выйти') }}
            	</a></li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
			@else 
				<li><a href="{{ route('login') }}">Авторизация</a></li>
				<li><a href="{{ route('register') }}">Регистрация</a></li>
			@endif
			
		</ul>
	</nav>

	<div class="fh5co-footer">
		<ul>
			<li><a href="#"><i class="icon-facebook2"></i></a></li>
			<li><a href="#"><i class="icon-twitter2"></i></a></li>
			<li><a href="https://www.instagram.com/vladislav.tkd/"><i class="icon-instagram"></i></a></li>
			<li><a href="#"><i class="icon-linkedin2"></i></a></li>
		</ul>
	</div>

</aside>