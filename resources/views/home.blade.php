@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDF8fGJvb2t8ZW58MHx8fHwxNjg5NTY1NzA0&ixlib=rb-4.0.3&q=80&w=1080');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .text-center h1 {
            color: white;
            cursor: pointer;
            display: inline-block;
            transition: transform 0.3s ease;
            
        }
        .text-center p{
            color: white;
        }
         .text-center h1:active {
            transform: translateX(20px) rotate(10deg);
        }
    </style>
    <div class="text-center">
        <h1>Selamat Datang di Toko Buku Saya</h1>
        <p>Silahkan Mampir</p>
        <a href="{{ route('buku.index') }}" class="btn btn-primary">Lihat Daftar Buku</a>
    </div>
@endsection
