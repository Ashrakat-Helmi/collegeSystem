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
                    <h1>Helwan University</h1>
                </a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('welcome') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#programs">programs</a></li>
                    <li><a class="nav-link scrollto" href="#news">News</a></li>
                    <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @if (Auth::guard('employee')->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false" v-pre>
                                {{ Auth::guard('employee')->user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('employee.home') }}">Dashboard</a>
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
                    @elseif (Auth::guard('admin')->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false" v-pre>
                                {{ Auth::guard('admin')->user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard</a>
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
                    @elseif (Auth::guard('web')->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false" v-pre>
                                {{ Auth::guard('web')->user()->name }}
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
                    @else
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Dashboard
                            </a>
                            @if (Route::has('register'))
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <h6 class="text-center">Student</h6>
                                    <a class="dropdown-item"
                                        href="{{ route('user.login') }}">{{ __('Login') }}</a>
                                    <a class="dropdown-item"
                                        href="{{ route('user.register') }}">{{ __('Register') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="text-center">Employee</h6>
                                    <a class="dropdown-item"
                                        href="{{ route('employee.login') }}">{{ __('Login') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="text-center">Admin</h6>
                                    <a class="dropdown-item"
                                        href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            @endif
                        </li>

                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->
        </div>
    </header>
