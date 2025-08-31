<footer class="footer">

    <div class="footer-top">
        <div class="container">

            <div class="footer-brand">

                <a href="#" class="logo">
                    <img src="{{ asset('storage/' . $about->logo) }}" alt="OsingGuide logo">
                </a>

                <p class="footer-text">
                    {{ $about->description }}
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

                        <a href="tel:{{ $contact->no_telp }}" class="contact-link">{{ $contact->no_telp }}</a>
                    </li>

                    <li class="contact-item">
                        <ion-icon name="mail-outline"></ion-icon>

                        <a href="mailto:{{ $contact->email }}" class="contact-link">{{ $contact->email }}</a>
                    </li>

                    <li class="contact-item">
                        <ion-icon name="location-outline"></ion-icon>

                        <address>{{ $contact->address }}</address>
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
