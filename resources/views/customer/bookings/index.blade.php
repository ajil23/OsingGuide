@extends('layouts.master')
@section('main')
<main class="main-content position-relative border-radius-lg">
    @include('layouts.header')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h6>Riwayat Pemesanan Saya</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-4">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Guide</th>
                                        <th>Tanggal</th>
                                        <th>Durasi</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->guide->name }}</td>
                                        <td>
                                            {{ $booking->start_time->format('d M Y H:i') }} - {{ $booking->end_time->format('d M Y H:i') }}
                                        </td>
                                        <td>{{ $booking->total_days }} hari</td>
                                        <td>
                                            <span class="badge bg-gradient-{{ 
                                                $booking->status == 'confirmed' ? 'info' : 
                                                ($booking->status == 'ongoing' ? 'warning' : 
                                                ($booking->status == 'completed' ? 'success' : 'secondary'))
                                            }}">
                                                {{ ucfirst($booking->status) }}
                                            </span>
                                        </td>
                                        <td>Rp {{ number_format($booking->total_price, 0, ',', '.') }}</td>
                                        <td>
                                            @if($booking->status === 'completed' && !$booking->review)
                                                <a href="{{ route('customer.review.create', $booking->id) }}" 
                                                   class="btn btn-sm btn-warning">Beri Ulasan</a>
                                            @else
                                                <span class="text-muted">Selesai</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Belum ada booking.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>
</main>
@endsection