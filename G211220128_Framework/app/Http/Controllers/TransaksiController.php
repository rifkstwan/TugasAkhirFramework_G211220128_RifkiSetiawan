<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Storage;
use App\Models\Transaksi;
use App\Models\Produk;
use App\Models\Pelanggan;




class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();
        return view('transaksi.create', compact('produk', 'pelanggan'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'produk_id' => 'required',
            'pelanggan_id' => 'required',
            'jumlah_produk' => 'required',
            'alamat' => 'required',
            'total_harga' => 'required',
            'tanggal_transaksi' => 'required',
            'bukti_transaksi' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // aturan untuk foto

        ]);

        $input = $request->all();

        // Proses unggah foto
        if ($request->hasFile('bukti_transaksi')) {
            $fotoPath = $request->file('bukti_transaksi')->store('public/bukti_transaksi');
            $input['bukti_transaksi'] = basename($fotoPath);
        }

        Transaksi::create($input);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();
        return view('transaksi.edit', compact('transaksi', 'produk', 'pelanggan'));
    }

    public function update(Request $request, $id)
    {
        Transaksi::find($id)->update($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Transaksi::find($id)->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}