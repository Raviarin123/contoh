@extends('layout.app')

@section('judul','Form Tambah Data')
@section('konten')

<section class="content">
    <div class="container-fluid">

        <!-- Small boxes (Start box) -->
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <form action="/item/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Kode Barang</label>
                            <input required name="kodebarang" type="number" class="form-control">
                </div>
                        <div class="mb-3">
                            <label for="">Nama Barang</label>
                            <input required name="namabarang" type="text" class="form-control">
                </div>
                        <div class="mb-3">
                            <label for="">Kategori</label>
                            <select name="kategori" id="" class="form-control">
                                <option value="">--Pilih kategori--</option>
                                <option value="makanan">Makanan</option>
                                <option value="nonmakanan">NonMakanan</option>
                            </select>
                </div>
                        <div class="mb-3">
                            <label for="">Stok</label>
                            <input required name="stok" type="number" class="form-control">
                </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input required name="harga" type="number" class="form-control">
                </div>
                        <div class="mb-3">
                           <a class="btn btn-secondary" href="/item">Batal</a>
                           <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>  
@endsection