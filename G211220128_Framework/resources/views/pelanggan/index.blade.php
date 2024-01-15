<!-- resources/views/pelanggan/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Daftar Pelanggan</h1>

        <a href="{{ route('pelanggan.create') }}" class="btn btn-success mb-3">Tambah Pelanggan Baru</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Tanggal Bergabung</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama_pelanggan }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->nomor_telepon }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->tanggal_bergabung }}</td>
                        <td>
                            <a href="{{ route('pelanggan.show', $p->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pelanggan.destroy', $p->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
