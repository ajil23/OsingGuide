@extends('layouts.master')
@section('main')
<main class="main-content position-relative border-radius-lg">
    @include('layouts.header')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Kelola Ketersediaan</h5>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('guide.availability') }}" method="POST" class="mb-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Tanggal</label>
                                    <input type="date" name="date" class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="available">Tersedia</option>
                                        <option value="unavailable">Tidak Tersedia</option>
                                    </select>
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>

                        <h6>Jadwal Saat Ini</h6>
                        @if($availabilities->isEmpty())
                            <p class="text-center text-muted">Belum ada jadwal khusus.</p>
                        @else
                            <ul class="list-group">
                                @foreach($availabilities as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>
                                            <strong>{{ $item->date->format('d M Y') }}</strong>
                                            <span class="badge bg-{{ $item->status == 'available' ? 'success' : 'danger' }}">
                                                {{ $item->status == 'available' ? 'Tersedia' : 'Tidak Tersedia' }}
                                            </span>
                                        </span>
                                        <form action="{{ route('guide.availability.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus jadwal ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>
</main>
@endsection