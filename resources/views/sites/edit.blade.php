@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Site</h2>
    <form action="{{ route('sites.update', $site->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('sites.form')
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('sites.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
