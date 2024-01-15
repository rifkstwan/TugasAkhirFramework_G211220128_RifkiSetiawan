<!-- resources/views/produk/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Detail Produk</h1>

        <div class="card">
            <div class="card-body">
                <p class="card-text">ID: {{ $produk->id }}</p>
                <p class="card-text">Nama: {{ $produk->nama_produk }}</p>
                <p class="card-text">Deskripsi: {{ $produk->deskripsi }}</p>
                <p class="card-text">Harga: {{ $produk->harga }}</p>
                <p class="card-text">Stok: {{ $produk->stok }}</p>
                <p class="card-text">Kategori: {{ $produk->kategori }}</p>
            </div>
        </div>

        <a href="{{ route('produk.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </div>
@endsection
