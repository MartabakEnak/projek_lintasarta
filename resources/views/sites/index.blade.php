@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Sites</h2>
    <a href="{{ route('sites.create') }}" class="btn btn-primary mb-3">+ Add</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Site</th>
                <th>Core</th>
                <th>Status Penggunaan</th>
                <th>Status Core</th>
                <th>OTDR (m)</th>
                <th>Source Site</th>
                <th>Destination Site</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sites as $site)
            <tr>
                <td>{{ $site->id }}</td>
                <td>{{ $site->nama_site }}</td>
                <td>{{ $site->core }}</td>
                <td>{{ $site->status_penggunaan }}</td>
                <td>{{ $site->status_core }}</td>
                <td>{{ $site->otdr }}</td>
                <td>{{ $site->source_site }}</td>
                <td>{{ $site->destination_site }}</td>
                <td>{{ $site->keterangan }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="9">Tidak ada data.</td>
            </tr>
            @endforelse
        </tbody>

    </table>
</div>
@endsection
