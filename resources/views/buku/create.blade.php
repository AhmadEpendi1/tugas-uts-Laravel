@extends('layouts.app')

@section('content')
<h1>Tambah Buku</h1>

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    @include('buku.form')
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
