@extends('layouts.app') {{-- menggunakan layouts/app.blade.php sebgaai template induk --}}

@section('title', 'Home') 

@section('content') {{-- mengisi @yield('content') yang terdapat pada template induk --}}




    <h1>Halaman About</h1>

    <p>Selamat datang di Praktikum Pemrograman Web Lanjut</p>

    <p>Nama: {{ $nama }}</p>
    <p>Program Studi: {{ $jurusan }}</p>

@endsection