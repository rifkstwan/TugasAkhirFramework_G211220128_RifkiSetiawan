<!-- resources/views/pelanggan/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Detail Pelanggan</h1>

        <div class="card">
            <div class="card-body">
                <p class="card-text">ID: {{ $pelanggan->id }}</p>
                <p class="card-text">Nama: {{ $pelanggan->nama_pelanggan }}</p>
                <p class="card-text">Alamat: {{ $pelanggan->alamat }}</p>
                <p class="card-text">Nomor Telepon: {{ $pelanggan->nomor_telepon }}</p>
                <p class="card-text">Email: {{ $pelanggan->email }}</p>
                <p class="card-text">Tanggal Bergabung: {{ $pelanggan->tanggal_bergabung }}</p>
            </div>
        </div>

        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </div>
@endsection
