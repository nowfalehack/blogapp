<ul class="sidenav sidenav-fixed">
    <li class="logo">MyBlog</li>

    <li>
        <a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.index') ? 'active-link' : '' }}">
            <i class="material-icons">dashboard</i> Dashboard
        </a>
    </li>

    <li>
        <a href="{{ route('posts.create') }}" class="{{ request()->routeIs('posts.create') ? 'active-link' : '' }}">
            <i class="material-icons">add_circle</i> New Post
        </a>
    </li>

    

    <li>
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn-flat white-text" style="width:100%; text-align:left;">
                <i class="material-icons left">logout</i> Logout
            </button>
        </form>
    </li>
</ul>
