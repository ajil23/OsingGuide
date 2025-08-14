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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

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

    <main>
        <article>

            <!-- Carousel Section -->
            <div class="swiper heroSwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/landing-page/ijen-photo.jpeg') }}" alt="Kawah Ijen" />
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/landing-page/pulau-merah.jpeg') }}" alt="Pulau Merah" />
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/landing-page/djawatan.jpeg') }}" alt="Djawatan" />
                    </div>

                </div>

                <!-- Pagination & Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
                <!--
            - #List Guide
            -->

            <section class="package" id="guide">
                <div class="container">
                    <p class="section-subtitle">Check Our Guide to Help Your Travel</p>
                    <h2 class="h2 section-title">List Guide</h2>
                    <p class="section-text">List of our guide in OsingGuide.</p>

                    <!-- Filter Atas -->
                    <div class="top-filters">
                        <button class="filter-btn active" data-sort="all">All</button>
                        <button class="filter-btn" data-sort="junior">Junior Guide</button>
                        <button class="filter-btn" data-sort="intermediate">Intermediate Guide</button>
                        <button class="filter-btn" data-sort="profesional">Profesional Guide</button>

                        <select id="price-sort">
                            <option value="">Urutkan Harga</option>
                            <option value="low">Harga Terendah</option>
                            <option value="high">Harga Tertinggi</option>
                        </select>
                    </div>

                    <div class="content-wrapper">
                        <!-- Sidebar Filter -->
                        <aside class="sidebar">
                            <section>
                                <h3>Date Range</h3>
                                <div class="date-range">
                                    <label for="start-date">From</label>
                                    <input type="date" id="start-date">

                                    <label for="end-date">To</label>
                                    <input type="date" id="end-date">

                                    <button type="button" class="btn-apply-date" id="apply-date-btn">Apply Date</button>
                                </div>
                            </section>

                            <section>
                                <h3>Language</h3>
                                <label><input type="checkbox" value="Indonesian" class="filter-language"><span class="checkmark"></span> Indonesian</label>
                                <label><input type="checkbox" value="English" class="filter-language"><span class="checkmark"></span> English</label>
                                <label><input type="checkbox" value="Mandarin" class="filter-language"><span class="checkmark"></span> Mandarin</label>
                                <label><input type="checkbox" value="Japanese" class="filter-language"><span class="checkmark"></span> Japanese</label>
                                <label><input type="checkbox" value="Korean" class="filter-language"><span class="checkmark"></span> Korean</label>
                                <label><input type="checkbox" value="Arabic" class="filter-language"><span class="checkmark"></span> Arabic</label>
                            </section>

                            <section>
                                <h3>Skills</h3>
                                <label><input type="checkbox" value="Hiking" class="filter-skill"><span class="checkmark"></span> Hiking</label>
                                <label><input type="checkbox" value="Photography" class="filter-skill"><span class="checkmark"></span> Photography</label>
                                <label><input type="checkbox" value="Cultural Tour" class="filter-skill"><span class="checkmark"></span> Cultural Tour</label>
                                <label><input type="checkbox" value="Food Tour" class="filter-skill"><span class="checkmark"></span> Food Tour</label>
                                <label><input type="checkbox" value="City Walk" class="filter-skill"><span class="checkmark"></span> City Walk</label>
                                <label><input type="checkbox" value="History" class="filter-skill"><span class="checkmark"></span> History</label>
                                <label><input type="checkbox" value="Adventure" class="filter-skill"><span class="checkmark"></span> Adventure</label>
                                <label><input type="checkbox" value="Family Tour" class="filter-skill"><span class="checkmark"></span> Family Tour</label>
                            </section>
                        </aside>

                        <!-- Konten Card -->
                        <div class="cards-grid" id="guide-list">
                            <div class="popular-card" data-category="intermediate" data-price="230000" data-language="English"
                                data-skill="Hiking" data-date="2025-08-01">
                                <figure class="card-img">
                                    <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Photo" loading="lazy">
                                </figure>
                                <div class="card-content">
                                    <div class="card-rating">
                                        <span class="rating-text">5/5</span>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <p class="card-subtitle">Intermediate</p>
                                    <h3 class="h3 card-title">Rovita Mei</h3>
                                    <p class="card-text">Rp. 230.000 / per day</p>
                                    <a href="/booking-guide/booking">
                                        <button type="button" class="btn-book-now">Book Now</button>
                                    </a>
                                </div>
                            </div>

                            <div class="popular-card" data-category="junior" data-price="145000" data-language="Indonesian"
                                data-skill="Photography" data-date="2025-08-10">
                                <figure class="card-img">
                                    <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Photo" loading="lazy">
                                </figure>
                                <div class="card-content">
                                    <div class="card-rating">
                                        <span class="rating-text">4.5/5</span>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <p class="card-subtitle">Junior</p>
                                    <h3 class="h3 card-title">Rosa Madinah</h3>
                                    <p class="card-text">Rp. 145.000 / per day</p>
                                    <button type="button" class="btn-book-now">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <img src="{{ asset('assets/img/landing-page/osingguide-logo.svg') }}" alt="Tourly logo">
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
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Init Hero Swiper -->
    <script>
        var heroSwiper = new Swiper(".heroSwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".popular-card");
    const filterBtns = document.querySelectorAll(".filter-btn");
    const priceSort = document.getElementById("price-sort");
    const applyDateBtn = document.getElementById("apply-date-btn");

    function applyFilters() {
        const activeCategory = document.querySelector(".filter-btn.active").dataset.sort;
        const selectedLanguages = Array.from(document.querySelectorAll(".filter-language:checked")).map(el => el.value);
        const selectedSkills = Array.from(document.querySelectorAll(".filter-skill:checked")).map(el => el.value);
        const startDate = document.getElementById("start-date").value;
        const endDate = document.getElementById("end-date").value;

        cards.forEach(card => {
            const category = card.dataset.category;
            const price = parseInt(card.dataset.price);
            const language = card.dataset.language;
            const skill = card.dataset.skill;
            const date = card.dataset.date;

            let visible = true;

            // Filter kategori
            if (activeCategory !== "all" && category !== activeCategory) {
                visible = false;
            }

            // Filter bahasa
            if (selectedLanguages.length && !selectedLanguages.includes(language)) {
                visible = false;
            }

            // Filter skill
            if (selectedSkills.length && !selectedSkills.includes(skill)) {
                visible = false;
            }

            // Filter date range
            if (startDate && date < startDate) visible = false;
            if (endDate && date > endDate) visible = false;

            card.style.display = visible ? "block" : "none";
        });

        // Sort harga
        if (priceSort.value) {
            const sortedCards = Array.from(cards).sort((a, b) => {
                const priceA = parseInt(a.dataset.price);
                const priceB = parseInt(b.dataset.price);
                return priceSort.value === "low" ? priceA - priceB : priceB - priceA;
            });
            const container = document.getElementById("guide-list");
            container.innerHTML = "";
            sortedCards.forEach(card => container.appendChild(card));
        }
    }

    filterBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            filterBtns.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            applyFilters();
        });
    });

    document.querySelectorAll(".filter-language, .filter-skill").forEach(el => {
        el.addEventListener("change", applyFilters);
    });

    priceSort.addEventListener("change", applyFilters);

    applyDateBtn.addEventListener("click", applyFilters);
});
    </script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
