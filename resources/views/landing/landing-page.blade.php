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

                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

            </div>
        </div>

    </header>

    <main>
        <article>

            <!--
        - #HERO
      -->

            <section class="hero" id="home">
                <div class="container">

                    <h2 class="h1 hero-title">enhance your travel experience in banyuwangi with our guide</h2>

                    <p class="hero-text">
                        OsingGuide is paltform for you to explore banyuwangi with great guide
                    </p>

                    <div class="btn-group">
                        <button class="btn btn-primary">Learn more</button>

                        <a href="/booking-guide/#guide" class="btn btn-secondary">Book Now</a>
                    </div>

                </div>
            </section>

            <!--
        - # Menu
      -->

            <section class="tour-search">
                <div class="container">
                    <h2 class="menu-title">Our Menu</h2>
                    <div class="tour-menu">
                        <a href="/booking-guide/#guide" class="menu-item">
                            <img src="{{ asset('assets/img/landing-page/guide-icon.svg') }}" alt="Booking Guide">
                            <h3>Booking Guide</h3>
                        </a>
                        <a href="#transportation" class="menu-item">
                            <img src="{{ asset('assets/img/landing-page/transportation-icon.svg') }}" alt="Transportation">
                            <h3>Transportation</h3>
                        </a>
                        <a href="#accommodation" class="menu-item">
                            <img src="{{ asset('assets/img/landing-page/accomodation-icon.svg') }}" alt="Accommodation">
                            <h3>Accommodation</h3>
                        </a>
                    </div>
                </div>
            </section>

            <!--
        - #POPULAR
      -->

            <section class="popular" id="place">
                <div class="container">

                    <p class="section-subtitle">most visited</p>

                    <h2 class="h2 section-title">Popular Place to Visit in Banyuwangi</h2>

                    <p class="section-text">
                        Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
                        laudantium.
                        Sit ornare
                        mollitia tenetur, aptent.
                    </p>

                    <ul class="popular-list">

                        <li>
                            <div class="popular-card">

                                <figure class="card-img">
                                    <img src="{{ asset('assets/img/landing-page/ijen-photo.jpeg') }}"
                                        alt="Kawah Ijen, Banyuwangi" loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <p class="card-subtitle">
                                        <a href="#">Banyuwangi</a>
                                    </p>

                                    <h3 class="h3 card-title">
                                        <a href="#">Ijen Creater</a>
                                    </h3>

                                    <p class="card-text">
                                        Kawah Ijen is most visited place
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="popular-card">

                                <figure class="card-img">
                                    <img src="{{ asset('assets/img/landing-page/pulau-merah.jpeg') }}"
                                        alt="Pulau Merah, Banyuwangi" loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <p class="card-subtitle">
                                        <a href="#">Banyuwangi</a>
                                    </p>

                                    <h3 class="h3 card-title">
                                        <a href="#">Red Island</a>
                                    </h3>

                                    <p class="card-text">
                                        Most Beach Viewed.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="popular-card">

                                <figure class="card-img">
                                    <img src="{{ asset('assets/img/landing-page/djawatan.jpeg') }}"
                                        alt="Djawatan, Banyuwangi" loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <p class="card-subtitle">
                                        <a href="#">Banyuwangi</a>
                                    </p>

                                    <h3 class="h3 card-title">
                                        <a href="#">Djawatan</a>
                                    </h3>

                                    <p class="card-text">
                                        forest like in fantasy.
                                    </p>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <button class="btn btn-primary">More destination</button>

                </div>
            </section>

            <!--
        - #PACKAGE
      -->

            <section class="package" id="recommendation">
                <div class="container">

                    <p class="section-subtitle">Checkout Our Guide to Help Your Travel</p>

                    <h2 class="h2 section-title">Guide Recommendation</h2>

                    <p class="section-text">
                        Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
                        laudantium.
                        Sit ornare
                        mollitia tenetur, aptent.
                    </p>

                    <ul class="package-list">

                        <li>
                            <div class="package-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Rovita Mei Andini"
                                        loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">Rovita Mei Andini</h3>

                                    <p class="card-text">
                                        English Langguage, Great Communication, etc.
                                    </p>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="time"></ion-icon>

                                                <p class="text">Avail</p>
                                            </div>
                                        </li>

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="people"></ion-icon>

                                                <p class="text">Intermediate</p>
                                            </div>
                                        </li>

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="location"></ion-icon>

                                                <p class="text">Banyuwangi</p>
                                            </div>
                                        </li>

                                    </ul>

                                </div>

                                <div class="card-price">

                                    <div class="wrapper">

                                        <p class="reviews">(50 reviews)</p>

                                        <div class="card-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                    </div>

                                    <p class="price">
                                        Rp.230.000
                                        <span>/ per day</span>
                                    </p>

                                    <button class="btn btn-secondary">Book Now</button>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="package-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/img/team-1.jpg') }}"
                                        alt="Summer Holiday To The Oxolotan River" loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">Rosa Madinah</h3>

                                    <p class="card-text">
                                        English Langguage, Great Communication, etc.
                                    </p>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="time"></ion-icon>

                                                <p class="text">Avail</p>
                                            </div>
                                        </li>

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="people"></ion-icon>

                                                <p class="text">Junior</p>
                                            </div>
                                        </li>

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="location"></ion-icon>

                                                <p class="text">Muncar</p>
                                            </div>
                                        </li>

                                    </ul>

                                </div>

                                <div class="card-price">

                                    <div class="wrapper">

                                        <p class="reviews">(20 reviews)</p>

                                        <div class="card-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                    </div>

                                    <p class="price">
                                        Rp.145.000
                                        <span>/ per day</span>
                                    </p>

                                    <button class="btn btn-secondary">Book Now</button>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="package-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('assets/img/team-3.jpg') }}"
                                        alt="Santorini Island's Weekend Vacation" loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">Azril Praya</h3>

                                    <p class="card-text">
                                        English Langguage, Great Communication, etc.
                                    </p>

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="time"></ion-icon>

                                                <p class="text">Avail</p>
                                            </div>
                                        </li>

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="people"></ion-icon>

                                                <p class="text">Junior</p>
                                            </div>
                                        </li>

                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="location"></ion-icon>

                                                <p class="text">Rogojampi</p>
                                            </div>
                                        </li>

                                    </ul>

                                </div>

                                <div class="card-price">

                                    <div class="wrapper">

                                        <p class="reviews">(40 reviews)</p>

                                        <div class="card-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                    </div>

                                    <p class="price">
                                        Rp.115.000
                                        <span>/ per day</span>
                                    </p>

                                    <button class="btn btn-secondary">Book Now</button>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <a href="/booking-guide/#guide">
                        <button class="btn btn-primary">View All Guide</button>
                    </a>

                </div>
            </section>

            <!--
        - #GALLERY
      -->

            <section class="gallery" id="gallery">
                <div class="container">

                    <p class="section-subtitle">Photo Gallery</p>

                    <h2 class="h2 section-title">Photo's From Travellers</h2>

                    <p class="section-text">
                        Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
                        laudantium.
                        Sit ornare
                        mollitia tenetur, aptent.
                    </p>

                    <ul class="gallery-list">

                        <li class="gallery-item">
                            <figure class="gallery-image">
                                <img src="{{ asset('assets/img/landing-page/gallery-1.jpg') }}" alt="Gallery image">
                            </figure>
                        </li>

                        <li class="gallery-item">
                            <figure class="gallery-image">
                                <img src="{{ asset('assets/img/landing-page/gallery-2.jpg') }}" alt="Gallery image">
                            </figure>
                        </li>

                        <li class="gallery-item">
                            <figure class="gallery-image">
                                <img src="{{ asset('assets/img/landing-page/gallery-3.jpg') }}" alt="Gallery image">
                            </figure>
                        </li>

                        <li class="gallery-item">
                            <figure class="gallery-image">
                                <img src="{{ asset('assets/img/landing-page/gallery-4.jpg') }}" alt="Gallery image">
                            </figure>
                        </li>

                        <li class="gallery-item">
                            <figure class="gallery-image">
                                <img src="{{ asset('assets/img/landing-page/gallery-5.jpg') }}" alt="Gallery image">
                            </figure>
                        </li>

                    </ul>

                </div>
            </section>

         <!--
        - #CTA
      -->

            <section class="cta" id="contact">
                <div class="container">

                    <div class="cta-content">
                        <p class="section-subtitle">Call To Action</p>

                        <h2 class="h2 section-title">Confused about where to go in Banyuwangi?</h2>

                        <p class="section-text">
                            Don't worry, we offer free consultations!
                            <br> Free consultations to help you decide where to go in Banyuwangi because Banyuwangi has so many cool tourist attractions.
                        </p>
                    </div>

                    <a href="https://wa.me/6287864310772?text=Hallo%2C%20saya%20ingin%20konsultasi%20perjalanan%20wisata">
                        <button class="btn btn-secondary">Get Free Consultation Now!</button>
                    </a>

                </div>
            </section>

        </article>
    </main>

    <!--
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="{{ asset('assets/img/landing-page/osingguide-logo.svg') }}" alt="OsingGuide logo">
                    </a>

                    <p class="footer-text">
                        OsingGuide is for you to make your travel more easier with our guide.
                    </p>

                </div>

                <div class="footer-contact">

                    <h4 class="contact-title">Contact Us</h4>

                    <p class="contact-text">
                        Feel free to contact and reach us !!
                    </p>

                    <ul>

                        <li class="contact-item">
                            <ion-icon name="call-outline"></ion-icon>

                            <a href="tel:+6287864310772" class="contact-link">+6287864310772</a>
                        </li>

                        <li class="contact-item">
                            <ion-icon name="mail-outline"></ion-icon>

                            <a href="mailto:osingguide@gmail.com" class="contact-link">osingguide@gmail.com</a>
                        </li>

                        <li class="contact-item">
                            <ion-icon name="location-outline"></ion-icon>

                            <address>Banyuwangi</address>
                        </li>

                    </ul>

                </div>

                <div class="footer-form">

                    <p class="form-text">
                        Subscribe our newsletter for more update & news !!
                    </p>

                    <form action="" class="form-wrapper">
                        <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

                        <button type="submit" class="btn btn-secondary">Subscribe</button>
                    </form>

                </div>

            </div>
        </div>

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

</body>

</html>
