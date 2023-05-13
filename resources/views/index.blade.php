@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
            <h1>Modul CRUD Transaksi </h1>
                <a href="{{url('create')}}" class="btn btn-primary mt-4">+ Tambah Transaksi</a>
            </div>

            <div class="col-lg-8 mt-3">
                <table class="table-bordered" >
                    <tr>
                        <th width="60px">ID</th>
                        <th width="300px">Nama Pembeli</th>
                        <th width="100px">Email</th>
                        <th width="300px">Nama Barang</th>
                        <th width="200px">Harga Barang</th>
                        <th width="200px">Jumlah Barang</th>
                        <th width="150px">Total Barang</th>
                        <th width="200px" >Action</th>
                    </tr>
                    @foreach ($data as $dataTransaksi)
                        <tr>
                        <td>{{ $dataTransaksi->id }}</td>
                        <td>{{ $dataTransaksi->nama_pembeli }}</td>
                        <td>{{ $dataTransaksi->nama_barang }}</td>
                        <td>{{ $dataTransaksi->email_pembeli }}</td>
                        <td>{{ $dataTransaksi->harga_barang }}</td>
                        <td>{{ $dataTransaksi->jumlah_barang }}</td>
                        <td>{{ $dataTransaksi->total_harga_barang }}</td>
                        <td>
                            <a href="{{ url('/show/'. $dataTransaksi->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/destroy/'. $dataTransaksi->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Menghapus ?')" >Hapus</a>
					 	</td>
                        </tr>
                    @endforeach
                </table>
                <a href="{{route('transaksi.pdf')}}" class="btn btn-danger mt-2">PDF</a>
                <a href="" class="btn btn-success mt-2">Excel</a>
                <div class="form-group mt-2">
                            <a href="{{url('/home') }}"> Kembali Kehalaman Utama</a>
                        </div>
            </div>

        </div>
    </div>
</section>


@endsection
