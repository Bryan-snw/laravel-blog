<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">

        <a class="navbar-brand" href="/">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
                    <a class="nav-link" href="/posts">Blog</a>
                </li>
                <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My
                                Dashboard</a>

                            <div class="dropdown-divider"></div>

                            <form action="/logout" method="POST">
                                {{-- csrf memberikan token untuk mencegah req jahat yang bukan berrasal dari web kita  --}}
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>

                        </div>
                    </li>
                @else
                    <li class="nav-item {{ $active == 'login' ? 'active' : '' }}"">
                        <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
