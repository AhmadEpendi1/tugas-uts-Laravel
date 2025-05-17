@extends('layouts.app')

@section('content')
<h1>Detail Buku</h1>

<ul class="list-group mb-3">
    <li class="list-group-item"><strong>Judul:</strong> {{ $buku->judul }}</li>
    <li class="list-group-item"><strong>Penulis:</strong> {{ $buku->penulis }}</li>
    <li class="list-group-item"><strong>Penerbit:</strong> {{ $buku->penerbit }}</li>
    <li class="list-group-item"><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</li>
</ul>

<a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
