<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ml-5 active">
                <a class="nav-link" href="/">Home</a>
            </li>
            @isset($account)
                <li class="nav-item">
                    <a class="nav-link" href="/feed">Feed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/log-out-action">Log Out</a>
                </li>
            @endisset
            @empty($account)
                <li class="nav-item">
                    <a class="nav-link" href="/log-in">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sign-up">Sign Up</a>
                </li>
            @endempty
        </ul>
    </div>
</nav>
