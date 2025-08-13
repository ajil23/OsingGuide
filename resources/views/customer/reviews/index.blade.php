@extends('layouts.master')
@section('main')
<main class="main-content position-relative border-radius-lg">
    @include('layouts.header')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h6>Ulasan Saya</h6>
                    </div>
                    <div class="card-body p-4">
                        @if($reviews->isEmpty())
                            <p class="text-center text-muted">Anda belum memberikan ulasan apapun.</p>
                        @else
                            <div class="timeline timeline-one-side">
                                @foreach($reviews as $review)
                                <div class="timeline-block mb-4">
                                    <span class="timeline-step">
                                        <i class="ni ni-star-gold text-warning text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">
                                            {{ $review->guide->name }}
                                            <span class="badge bg-{{ ['','danger','danger','warning','success','success'][$review->rating] }} ms-2">
                                                {{ $review->rating }} ⭐
                                            </span>
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                            {{ $review->booking->start_time->format('d M Y') }} 
                                            • {{ $review->created_at->diffForHumans() }}
                                        </p>
                                        <p class="text-sm mt-2">
                                            "{{ $review->comment ?? 'Tidak ada komentar.' }}"
                                        </p>
                                        <div class="mt-2">
                                            <a href="{{ route('customer.guides') }}" class="text-xs text-primary">Lihat profil guide</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>
</main>
@endsection