<!-- resources/views/pelanggan/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Pelanggan Baru</h1>

        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" name="nama_pelanggan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="text" name="nomor_telepon" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_bergabung">Tanggal Bergabung:</label>
                <input type="date" name="tanggal_bergabung" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
