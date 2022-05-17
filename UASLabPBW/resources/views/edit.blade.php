@extends('template')
@section('title', 'Edit Data barang')

@section('konten')
    @foreach($barang as $brg)
        <form action="/barang/update" method ="post">
            {{csrf_field()}}
            id <br>  <input type=text, name="id", required="required", value="{{$brg->id}}"><br>
            nama_produk <br> <input type=text, name="nama_produk", required="required", value="{{$brg->nama_produk}}"><br>
            jenis_produk<br><input type=text, name="jenis_produk", required="required", value="{{$brg->jenis_produk}}"><br>
            jumlah_stok <br> <input type=text, name="jumlah_stok", required="required", value="{{$brg->jumlah_stok}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
@endsection