@extends('layouts.app')

@section('content')
<h1>Edit Buku</h1>

<form action="{{ route('buku.update', $buku) }}" method="POST">
    @csrf
    @method('PUT')
    @include('buku.form')
    <button class="btn btn-success">Edit</button>
</form>
@endsection
