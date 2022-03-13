<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:comfac@commerce.helwan.edu.eg">Contact Us</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span> +20 25509878</span></i>
            </div>

            <div class="cta d-none d-md-flex align-items-center">
                <a href="#about" class="scrollto">Apply Now!</a>
            </div>
        </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <a class="text-decoration-none" href="{{ route('welcome') }}">
                    <h1 class="text-uppercase">Helwan University
                    </h1>
                </a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('welcome') }}">Home</a></li>
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Desires
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                            <a class="text-center dropdown-item" href="{{ route('desires.create') }}">Apply</a>
                            <div class="dropdown-divider"></div>
                            <a class="text-center dropdown-item" href="{{ route('desires.index') }}">Status</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Questions
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                            <a class="text-center dropdown-item" href="{{ route('questions.create') }}">Ask</a>
                            <div class="dropdown-divider"></div>
                            <a class="text-center dropdown-item" href="{{ route('questions.index') }}">Answers</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        @guest
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Dashboard
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <h6 class="text-center">Students</h6>
                                <a class="dropdown-item" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="dropdown-item"
                                        href="{{ route('user.register') }}">{{ __('Register') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="text-center">Employees</h6>
                                    <a class="dropdown-item"
                                        href="{{ route('employee.login') }}">{{ __('Login') }}</a>
                            </div>
                        </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user.home') }}">Dashboard</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->
        </div>
    </header>
