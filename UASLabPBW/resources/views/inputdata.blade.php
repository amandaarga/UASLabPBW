@extends('template')
@section('title', 'Input Data barang')

@section('konten')
    <form action="/barang/store" method ="post">
        {{csrf_field()}}
        id <br>  <input type=text, name="id", required="required"><br>
        nama_produk <br> <input type=text, name="nama_produk", required="required"><br>
        jenis_produk <br><input type=text, name="jenis_produk", required="required"><br>
        jumlah_stok <br> <input type=text, name="jumlah_stok", required="required"><br>
        <input type="submit" value="Simpan Data">
    </form>

@endsection