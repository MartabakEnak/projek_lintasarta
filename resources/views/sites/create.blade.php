@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Site</h2>
    <form action="{{ route('sites.store') }}" method="POST">
        @csrf
        @include('sites.form')
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('sites.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
