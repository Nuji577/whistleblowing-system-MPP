@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5 text-uppercase fw-bold">Daftar Pengaduan</h2>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Pelapor</th>
                    <th>Email</th>
                    <th>Jenis Pelanggaran</th>
                    <th>Indikasi</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Nama Terlapor</th>
                    <th>Kronologi</th>
                    <th>Bukti</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengaduan as $key => $p)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <span class="badge 
                            @if($p->jenispelanggaran == 'Korupsi') bg-danger 
                            @elseif($p->jenispelanggaran == 'Benturan Kepentingan') bg-warning 
                            @else bg-info 
                            @endif">
                            {{ $p->jenispelanggaran }}
                        </span>
                    </td>
                    <td>{{ $p->indikasi }}</td>
                    <td>{{ $p->tempat }}</td>
                    <td>{{ date('d M Y', strtotime($p->waktu)) }}</td>
                    <td>{{ $p->terlapor }}</td>
                    <td style="min-width: 200px; max-height: 100px; overflow-y: auto;">
                        {{ $p->saran }}
                    </td>
                    
                    <td>
                        @if ($p->attachment)
                            <a href="{{ asset('storage/'.$p->attachment) }}" class="btn btn-sm btn-outline-primary" target="_blank">Lihat Bukti</a>
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('pengaduan.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="10" class="text-center text-muted">Belum ada pengaduan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
