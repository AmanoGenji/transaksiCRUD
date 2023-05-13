@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
        <h1>Tambahkan Data Transaksi</h1><br></br>
            <div class="row">
                <div class="col-lg-8">

                    <form action="{{url('/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="Nama">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control" placeholder="Yusuf">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" placeholder="TV">
                        </div>  
                        <div class="form-group">
                            <label for="Nama">Email</label>
                            <input type="text" name="email_pembeli" class="form-control" placeholder="Xxxxxx1@gmail.com">
                        </div>  
                        <div class="form-group">
                            <label for="Nama">Harga Barang</label>
                            <input type="number" name="harga_barang" class="form-control" placeholder="2000000">
                        </div> 
                        <div class="form-group">
                            <label for="Nama">Jumlah Barang</label>
                            <input type="number" name="jumlah_barang" class="form-control" placeholder="1">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Total Harga Barang</label>
                            <input type="number" name="total_harga_barang" class="form-control" placeholder="1">
                        </div>                        
                        <div class="form-group mt-2">
                            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div> 
                        <div class="form-group mt-2">
                            <a href="{{url('/') }}"> Kembali Kehalaman Utama</a>
                        </div> 
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection