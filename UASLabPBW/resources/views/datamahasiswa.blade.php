@extends('template')
@section('title', 'Input Barang')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2> Data Barang </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>id</th>
                    <th>nama_produk</th>
                    <th>jenis_produk</th>
                    <th>jumlah_stok</th>
                </thead>
            <tbody> 
                @foreach($barang as $brg)
                <tr>
                    <td>{{$brg->id}}</td>
                    <td>{{$brg->nama_produk}}</td>
                    <td>{{$brg->jenis_produk}}</td>
                    <td>{{$brg->jumlah_stok}}</td>
                    <td>
                        <a href="/barang/edit/{{ $brg->id}}">Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/barang/hapus/{{ $brg->id}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection