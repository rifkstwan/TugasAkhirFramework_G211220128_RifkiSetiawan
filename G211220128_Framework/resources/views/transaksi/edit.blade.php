<!-- resources/views/transaksi/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Transaksi</h1>

        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="produk_id">Produk:</label>
                <select name="produk_id" class="form-control" required>
                    @foreach ($produk as $p)
                        <option value="{{ $p->id }}" @if ($p->id == $transaksi->produk_id) selected @endif>{{ $p->nama_produk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pelanggan_id">Pelanggan:</label>
                <select name="pelanggan_id" class="form-control" required>
                    @foreach ($pelanggan as $pl)
                        <option value="{{ $pl->id }}" @if ($pl->id == $transaksi->pelanggan_id) selected @endif>{{ $pl->nama_pelanggan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_produk">Jumlah Produk:</label>
                <input type="text" name="jumlah_produk" class="form-control" value="{{ $transaksi->jumlah_produk }}" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <input type="text" name="total_harga" class="form-control" value="{{ $transaksi->total_harga }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                <input type="date" name="tanggal_transaksi" class="form-control" value="{{ $transaksi->tanggal_transaksi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
