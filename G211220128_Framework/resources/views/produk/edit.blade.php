<!-- resources/views/produk/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Produk</h1>

        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" class="form-control" required>{{ $produk->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" value="{{ $produk->harga }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="text" name="stok" value="{{ $produk->stok }}"
@endsection