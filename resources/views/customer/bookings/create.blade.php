@extends('layouts.master')
@section('main')
<main class="main-content position-relative border-radius-lg">
    @include('layouts.header')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Pesan: {{ $guide->name }}</h5>
                        <form action="{{ route('customer.booking.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="guide_id" value="{{ $guide->id }}">

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
                                <input type="number" name="number_of_travelers" class="form-control" min="1" max="{{ $guide->guideProfile->max_travelers }}" required>
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
            </div>
        </div>
        @include('layouts.footer')
    </div>
</main>
@endsection
@section('breadcrumb', 'Pesan Pemandu')