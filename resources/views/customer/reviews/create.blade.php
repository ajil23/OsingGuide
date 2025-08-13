@extends('layouts.master')
@section('main')
<main class="main-content position-relative border-radius-lg">
    @include('layouts.header')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5>Beri Ulasan untuk {{ $booking->guide->name }}</h5>
                        <form action="{{ route('customer.review.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">

                            <div class="mb-3">
                                <label>Rating (1-5)</label>
                                <select name="rating" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="1">1 - Buruk</option>
                                    <option value="2">2 - Kurang</option>
                                    <option value="3">3 - Cukup</option>
                                    <option value="4">4 - Bagus</option>
                                    <option value="5">5 - Sangat Bagus</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Komentar</label>
                                <textarea name="comment" class="form-control" rows="4" placeholder="Bagaimana pengalaman Anda?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</main>
@endsection