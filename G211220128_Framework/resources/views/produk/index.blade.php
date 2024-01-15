<!-- resources/views/produk/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Daftar Produk</h1>

        <a href="{{ route('produk.create') }}" class="btn btn-success mb-3">Tambah Produk Baru</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama_produk }}</td>
                        <td>{{ $p->deskripsi }}</td>
                        <td>{{ $p->harga }}</td>
                        <td>{{ $p->stok }}</td>
                        <td>{{ $p->kategori }}</td>
                        <td>
                            <a href="{{ route('produk.show', $p->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('produk.destroy', $p->id) }}" method="POST" style="display: inline;">
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
