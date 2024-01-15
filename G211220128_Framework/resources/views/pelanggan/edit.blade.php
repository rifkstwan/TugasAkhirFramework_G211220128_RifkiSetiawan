<!-- resources/views/pelanggan/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Pelanggan</h1>

        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" class="form-control" required>{{ $pelanggan->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="text" name="nomor_telepon" value="{{ $pelanggan->nomor_telepon }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $pelanggan->email }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_bergabung">Tanggal Bergabung:</label>
                <input type="date" name="tanggal_bergabung" value="{{ $pelanggan->tanggal_bergabung }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </div>
@endsection
