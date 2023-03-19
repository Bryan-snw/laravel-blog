<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/">Laravel Blog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
        data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="nav-item text-nowrap">
        <form action="/logout" method="POST">
            {{-- csrf memberikan token untuk mencegah req jahat yang bukan berrasal dari web kita  --}}
            @csrf
            <button type="submit" class="nav-link px-3 bg-dark text-white border-0">
                Logout
                <span data-feather="log-out"></span>
            </button>
        </form>
    </div>

</nav>
