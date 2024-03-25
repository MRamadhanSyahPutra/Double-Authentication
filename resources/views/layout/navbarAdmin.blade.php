<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg" style="background-color:#12372a;">
        <!-- Container wrapper -->
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/programming-language-1.png') }}" height="40" alt="MDB Logo" loading="lazy" />
            </a>

            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarCenteredExample"
                aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">

                @gAdmin
                    <ul class="navbar-nav mb-2 mb-lg-0 px-2">
                        <li class="nav-item mx-2">
                            <a href="{{ url('login') }}" class="nav-link">
                                <button class="btn btn-primary" type="button" data-mdb-ripple-init
                                    style="background-color: #436850">
                                    User
                                </button>
                            </a>
                        </li>
                    </ul>
                @endgAdmin

                @auth('admin')
                    <ul class="navbar-nav mb-2 mb-lg-0 px-2">
                        <li class="nav-item mx-2">
                            <a href="{{ route('admin.home') }}" class="nav-link @yield('home')">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="#AboutMe" class="nav-link">About me</a>
                        </li>
                    </ul>
                    <div class="dropdown p-1 pb-2 mx-4">
                        <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
                                alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" style="background-color: #12372a"
                            aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item text-secondary" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-secondary" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-secondary" href="{{ route('Admin.logout') }}"
                                    data-name="{{ Auth::User('admin')->nama_lengkap }}" id="Logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                @endauth

            </div>

        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
