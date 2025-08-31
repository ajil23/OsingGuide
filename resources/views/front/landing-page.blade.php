@extends('front.layout.master')

@section('content')
    <article>

        <!--  #HERO -->

        <section class="hero" id="home">
            <div class="container">

                <h2 class="h1 hero-title">Discover the true beauty of Banyuwangi</h2>

                <p class="hero-text">
                    {{-- Experience an unforgettable trip with our reliable guides --}}
                    {{-- Experience a once-in-a-lifetime journey with our trusted guides, where every step brings you closer to the natural beauty and rich culture of Banyuwangi --}}
                    Explore Banyuwangi with our reliable guides and create memories that last forever as every step brings
                    you closer to its wonders
                </p>

                {{-- <div class="btn-group">
                    <button class="btn btn-primary">Learn more</button>

                    <a href="{{ route('customer.list-guides') }}" class="btn btn-secondary">Book Now</a>
                </div> --}}


            </div>
            <div class="tour-search">
                <form action="{{ route('customer.list-guides') }}" method="GET" class="tour-search-form">

                    <div class="input-wrapper">
                        <label for="level" class="input-label">Level Guides*</label>
                        <select name="level" id="level" class="input-select" style="width: 100% !important;">
                            <option value="" selected hidden>--Select Level--</option>
                            <option value="junior" {{ request('level') == 'junior' ? 'selected' : '' }}>Junior
                            </option>
                            <option value="intermediate" {{ request('level') == 'intermediate' ? 'selected' : '' }}>
                                Intermediate
                            </option>
                            <option value="expert" {{ request('level') == 'expert' ? 'selected' : '' }}>Expert
                            </option>
                        </select>
                    </div>

                    {{-- @php
                        $level = [
                            ''              => "All Guide Levels",
                            'junior'        => "Junior",
                            'intermediate'  => "Intermediate",
                            'expert'        => "Expert"
                        ];
                    @endphp
                    <div class="input-wrapper">
                        <label for="level" class="input-label">Guide's Level</label>
                        <div id="sample-select" data-option='@json($level)''></div>
                    </div> --}}

                    <div class="input-wrapper">
                        <label for="skill" class="input-label">Skills*</label>
                        @php
                            $skills = [
                                'Hiking',
                                'Photography',
                                'Cultural Tour',
                                'Food Tour',
                                'City Walk',
                                'History',
                                'Adventure',
                                'Family Tour',
                            ];
                        @endphp
                        <select name="skills[]" id="skill" class="input-select" style="width: 100% !important;">
                            <option value="" selected hidden>-- Select Skill--</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill }}"
                                    {{ in_array($skill, (array) request('skills')) ? 'selected' : '' }}>
                                    {{ $skill }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-wrapper">
                        <label for="start-date" class="input-label">Start Tour*</label>
                        <input type="date" name="start_date" id="start-date" value="{{ request('start_date') }}" required
                            class="input-field">
                    </div>

                    <div class="input-wrapper">
                        <label for="end-date" class="input-label">End Tour*</label>
                        <input type="date" name="end_date" id="end-date" value="{{ request('end_date') }}" required
                            class="input-field">
                    </div>

                    <button type="submit" class="btn btn-secondary">Search Guides</button>
                </form>
            </div>
        </section>

        <!--  # Menu -->

        <!--  #POPULAR  -->

        <section class="popular" id="place">
            <div class="container">

                <p class="section-subtitle">most visited</p>

                <h2 class="h2 section-title">Popular Place to Visit in Banyuwangi</h2>

                <p class="section-text">
                    There are many tourist attractions in Banyuwangi that must be visited, starting from mountains,
                    forests or
                    beaches and they certainly will not disappoint.
                </p>

                <ul class="popular-list">
                    @foreach ($places as $place)
                        <li>
                            <div class="popular-card">

                                <figure class="card-img">
                                    <img src="{{ asset('storage/' . $place->image) }}" alt="{{ $place->name_place }}"
                                        loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <div class="card-rating">
                                        @for ($i = 0; $i < $place->rating; $i++)
                                            <ion-icon name="star"></ion-icon>
                                        @endfor
                                    </div>

                                    <p class="card-subtitle">
                                        {{ $place->location }}
                                    </p>

                                    <h3 class="h3 card-title">
                                        <a href="#">
                                            {{ $place->name_place }}
                                        </a>
                                    </h3>

                                    <p class="card-text">
                                        {{ Str::limit($place->content, 25, '...') }}
                                    </p>

                                </div>

                            </div>
                        </li>
                    @endforeach
                </ul>

                <a href="#">
                    <button class="btn btn-primary">More Place Destination</button>
                </a>

            </div>
        </section>

        <!-- #PACKAGE -->

        <section class="package" id="recommendation">
            <div class="container">

                <p class="section-subtitle">Check Our Guide to Help Your Travel</p>

                <h2 class="h2 section-title">Guide Recommendation</h2>

                <p class="section-text">
                    We provide guides who are professional in their duties who will definitely guide you to get to
                    know more
                    about the city of Banyuwangi.
                </p>

                <ul class="package-list">
                    @foreach ($guides as $guide)
                        <li>
                            <div class="package-card">

                                <figure class="card-banner">
                                    <img src="{{ $guide->guideProfile->photo ? asset('storage/' . $guide->guideProfile->photo) : asset('assets/img/team-1.jpg') }}"
                                        alt="{{ $guide->name }}" loading="lazy">
                                </figure>

                                <div class="card-content">

                                    <h3 class="h3 card-title">{{ $guide->name }}</h3>

                                    <p class="card-text">
                                        {{ $guide->guideProfile->bio }}
                                    </p>

                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <div class="meta-box">
                                                <ion-icon name="people"></ion-icon>
                                                <p class="text">{{ ucfirst($guide->guideProfile->level) }} Guide
                                                </p>
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
                                        <p class="reviews">({{ $guide->reviews_count }} reviews)</p>

                                        <div class="card-rating">
                                            <span
                                                class="rating-text">{{ number_format($guide->guideProfile->rating ?? 0, 1) }}/5</span>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </div>

                                    <p class="price">
                                        Rp. {{ number_format($guide->guideProfile->daily_rate, 0, ',', '.') }}
                                        <span>/ per day</span>
                                    </p>

                                    <a href="{{ route('customer.booking.create', $guide->id) }}">
                                        <button class="btn btn-secondary">Book Now</button>
                                    </a>

                                </div>

                            </div>
                        </li>
                    @endforeach
                </ul>

                <a href="{{ route('customer.list-guides') }}">
                    <button class="btn btn-primary">View All Guide</button>
                </a>

            </div>
        </section>
        <!--  #GALLERY -->

        <section class="gallery" id="gallery">
            <div class="container">

                <p class="section-subtitle">Photo Gallery</p>

                <h2 class="h2 section-title">Photo's From Travellers</h2>

                <p class="section-text">
                    These beautiful photos were captured as very beautiful memories while exploring Banyuwangi.
                </p>

                <ul class="gallery-list">

                    @foreach ($galleries as $gallery)
                        <li class="gallery-item">
                            <figure class="gallery-image">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Images">
                            </figure>
                        </li>
                    @endforeach

                </ul>

                <a href="#">
                    <button class="btn btn-primary">More Photo's</button>
                </a>

            </div>
        </section>

        <!--  #CTA -->

        <section class="cta" id="contact">
            <div class="container">

                <div class="cta-content">
                    <p class="section-subtitle">Call To Action</p>

                    <h2 class="h2 section-title">Confused about where to go in Banyuwangi?</h2>

                    <p class="section-text">
                        Don't worry, we offer free consultations!
                        <br> Free consultations to help you decide where to go in Banyuwangi because Banyuwangi has
                        so many cool tourist attractions.
                    </p>
                </div>

                <a
                    href="https://wa.me/{{ $contact->no_telp }}?text=Hallo%2C%20saya%20ingin%20konsultasi%20perjalanan%20wisata">
                    <button class="btn btn-secondary">Get Free Consultation Now!</button>
                </a>

            </div>
        </section>

    </article>
@endsection
