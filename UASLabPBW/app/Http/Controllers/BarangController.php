<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel barang
        $barang= DB::table('barang')->get();

        // mengirim ke halaman barang untuk ditampilkan data
        return view('datamahasiswa',['barang'=>$barang]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('barang')->insert([
            'id' => $request->id,
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'jumlah_stok' => $request->jumlah_stok
        ]);

        return redirect('/tampildata');
    }

    public function edit($id)
    {
        #ambil data barang berdasarkan id
        $barang = DB::table('barang')->where('id', $id)->get();

        #passing data
        return view('edit', ['barang' => $barang]);
    }

    public function update(Request $request)
    {
        DB::table('barang')->where('id', $request->id)->update([
            'id' => $request->id,
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'jumlah_stok' => $request->jumlah_stok
        ]);

        return redirect('/tampildata');
    }

    public function hapus($id)
    {
        DB::table('barang')->where('id', $id)->delete();
        return redirect('/tampildata');
    }

}