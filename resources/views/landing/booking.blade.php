<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OsingGuide - Make Your Trip Easier</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ asset('assets/img/landing-page/osingguide-logo.svg') }}" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}">
    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css')}}" rel="stylesheet" />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>

        <div class="overlay" data-overlay></div>

        <div class="header-top">
            <div class="container">

                <a href="tel:+6287864310772" class="helpline-box">

                    <div class="icon-box">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>

                    <div class="wrapper">
                        <p class="helpline-title">For Further Inquires :</p>

                        <p class="helpline-number">+6287864310772</p>
                    </div>

                </a>

                <a href="/" class="logo">
                    <img src="{{ asset('assets/img/landing-page/osingguide-logo.svg') }}" alt="OsingGuide logo">
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

                        <a href="#" class="logo">
                            <img src="{{ asset('assets/img/landing-page/osingguide-logo.svg') }}" alt="Tourly logo">
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
                            <a href="/#" class="navbar-link" data-nav-link>about us</a>
                        </li>

                        <li>
                            <a href="/#place" class="navbar-link" data-nav-link>place to visit</a>
                        </li>

                        <li>
                            <a href="/#recommendation" class="navbar-link" data-nav-link>recomendation</a>
                        </li>

                        <li>
                            <a href="/#gallery" class="navbar-link" data-nav-link>gallery</a>
                        </li>

                        <li>
                            <a href="/#contact" class="navbar-link" data-nav-link>contact us</a>
                        </li>

                    </ul>

                </nav>

                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

            </div>
        </div>
    </header>

    <!--
    - #MAIN CONTENT
  -->

    <main>
        <article>
            <section class="guide-detail">
                <div class="container">

                    <!-- Detail Guide -->
                    <div class="guide-info">
                        <div class="guide-photo">
                            <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Rovita Mei">
                        </div>
                        <div class="guide-desc">
                            <h2>Rovita Mei</h2>
                            <p class="guide-category">Intermediate Guide</p>
                            <div class="guide-rating">
                                <span class="rating-text">5/5</span>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <p class="guide-price">Rp. 230.000 / per day</p>
                            <p class="guide-bio">ini</p>
                            <ul class="guide-skills">
                                Skill
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <!-- Form Pemesanan -->
                    <div class="booking-form">
                        <h3>Pesan Guide</h3>
                        <form action="{{ route('customer.booking.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="guide_id" value="1">

                            <div class="mb-3">
                                <label>Tanggal Mulai</label>
                                <input type="datetime-local" name="start_time" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Selesai</label>
                                <input type="datetime-local" name="end_time" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Jumlah Wisatawan</label>
                                <input type="number" name="number_of_travelers" class="form-control" min="1"
                                    max="20" required>
                            </div>
                            <div class="mb-3">
                                <label>Tujuan Wisata</label>
                                <input type="text" name="destination" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Catatan (Opsional)</label>
                                <textarea name="notes" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                        </form>
                    </div>

                </div>
            </section>
        </article>
    </main>

    <!--
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    &copy; 2025 <a href="">osingguide</a>. All rights reserved
                </p>

                <ul class="footer-bottom-list">

                    <li>
                        <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link">Term & Condition</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link">FAQ</a>
                    </li>

                </ul>

            </div>
        </div>

    </footer>

    <!--
    - #GO TO TOP
  -->

    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    <!--
    - custom js link
  -->
    <script src="{{ asset('assets/js/landing-page.js') }}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('assets/js/argon-dashboard.min.js')}}"></script>
</body>

</html>
