<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(0, 0, 0, 0.05);">
    <div class="container">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item p-1 m-1 {{ Request::is('/') ? 'border-bottom border-secondary' : '' }}">
                <a class="nav-link p-0" href="/">Home</a>
            </li>
            @if(session('AccountId'))
                <li class="nav-item p-1 m-1 {{ Request::is('feed') ? 'border-bottom border-secondary' : '' }}">
                    <a class="nav-link p-0" href="/feed">Feed</a>
                </li>
                <li class="nav-item p-1 m-1 {{ Request::is('messages') ? 'border-bottom border-secondary' : '' }}">
                    <a class="nav-link p-0" href="/messages">Messages</a>
                </li>
                <li class="nav-item p-1 m-1 {{ Request::is('account') ? 'border-bottom border-secondary' : '' }}">
                    <a class="nav-link p-0" href="/account">Account</a>
                </li>
            @elseif(!session('AccountId'))
                <li class="nav-item p-1 m-1 {{ Request::is('log-in') ? 'border-bottom border-secondary' : '' }}">
                    <a class="nav-link p-0" href="/log-in">Log In</a>
                </li>
                <li class="nav-item p-1 m-1 {{ Request::is('sign-up') ? 'border-bottom border-secondary' : '' }}">
                    <a class="nav-link p-0" href="/sign-up">Sign Up</a>
                </li>
            @endif
        </ul>
        <form class="d-flex" action="/search" method="post">
            <input class="form-control me-2" type="search" placeholder="Search">
            <div class="dropdown me-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Users</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" value="users">Users</a></li>
                    <li><a class="dropdown-item" value="posts">Posts</a></li>
                </ul>
            </div>
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>
</nav>
