<!-- resources/views/produk/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Produk Baru</h1>

        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" name="nama_produk" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="text" name="stok" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <input type="text" name="kategori" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
