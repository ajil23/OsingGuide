@extends('layouts.master')
@section('main')
<main class="main-content position-relative border-radius-lg">
    @include('layouts.header')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Cari Pemandu Wisata</h6>
                    </div>
                    <div class="card-body px-4 pt-2 pb-2">
                        <form method="GET" class="row g-3">
                            <div class="col-md-4">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="">Semua Level</option>
                                    <option value="junior" {{ request('level') == 'junior' ? 'selected' : '' }}>Junior</option>
                                    <option value="intermediate" {{ request('level') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                    <option value="expert" {{ request('level') == 'expert' ? 'selected' : '' }}>Expert</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Tanggal</label>
                                <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    @foreach($guides as $guide)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $guide->name }}</h5>
                                <p class="text-sm"><strong>Level:</strong> {{ ucfirst($guide->guideProfile->level) }}</p>
                                <p><strong>Tarif:</strong> Rp{{ number_format($guide->guideProfile->daily_rate, 0, ',', '.') }}/hari</p>
                                <p><strong>Bahasa:</strong> {{ implode(', ', $guide->guideProfile->languages) }}</p>
                                <p>{{ Str::limit($guide->guideProfile->bio, 100) }}</p>
                                <a href="{{ route('customer.booking.create', $guide->id) }}" class="btn btn-sm btn-success">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</main>
@endsection