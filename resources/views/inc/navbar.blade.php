<div class="logo">
	<h1><a href="/">RonanBlog.tk</a></h1>
</div>
<ul>
    @auth
        <li>
		    <a class="dropdown-item" href="{{ route('logout') }}"
		       onclick="event.preventDefault();
		                     document.getElementById('logout-form').submit();">
		        {{ __('Logout') }}
		    </a>

		    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		        @csrf
		    </form>
		</li>
    @endauth
	<li><a href="/contact">Contact</a></li>
	<li><a href="/projects">Projects</a></li>
	<li><a href="/about">About</a></li>
	<li><a href="/posts">Blog</a></li>
</ul>