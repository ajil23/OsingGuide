<header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
        <div class="container">

            <a href="tel:{{ $contact->no_telp }}" class="helpline-box">

                <div class="icon-box">
                    <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="wrapper">
                    <p class="helpline-title">For Further Inquires :</p>

                    <p class="helpline-number">{{ $contact->no_telp }}</p>
                </div>

            </a>

            <a href="/" class="logo">
                <img src="{{ asset('assets/img/landing-page/osingguide-whitelogo.PNG') }}" alt="OsingGuide logo"
                    width="100px">
            </a>

            <div class="header-btn-group">

                <button class="search-btn" aria-label="Search">
                    <ion-icon name="search"></ion-icon>
                </button>

                <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

            </div>

        </div>
    </div>

    <div class="header-bottom">
        <div class="container">

            <ul class="social-list">

                <li>
                    <a href="https://www.instagram.com/osingguide?igsh=eXVmdWlkbHdyMmYx" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>

            </ul>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="/" class="logo">
                        <img src="{{ asset('assets/img/landing-page/osingguide-logo.svg') }}" alt="OsingGuide logo">
                    </a>

                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="/#home" class="navbar-link" data-nav-link>home</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link" data-nav-link>about us</a>
                    </li>

                    <li>
                        <a href="#place" class="navbar-link" data-nav-link>place to visit</a>
                    </li>

                    <li>
                        <a href="#recommendation" class="navbar-link" data-nav-link>recomendation</a>
                    </li>

                    <li>
                        <a href="#gallery" class="navbar-link" data-nav-link>gallery</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
                    </li>

                </ul>

            </nav>

            <div class="menu-right">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endguest

                @auth
                    <div class="profile-dropdown">
                        <button class="profile-btn">
                            <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Avatar">
                            <span class="profile-name">{{ Auth::user()->name }}</span>
                            <i class="arrow-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">My Profile</a>
                            <a href="{{ route('customer.bookings') }}">Booking History</a>
                            <hr>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="logout-btn">Logout</button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>

</header>
