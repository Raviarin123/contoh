@extends('layout.app')

@section('judul','Form Tambah Data')
@section('konten')

<section class="content">
    <div class="container-fluid">

        <!-- Small boxes (Start box) -->
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <form action="/item/{{ $item->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Kode Barang</label>
                            <input value="{{ $item->kodebarang }}" required name="kodebarang" type="number" class="form-control">
                </div>
                        <div class="mb-3">
                            <label for="">Nama Barang</label>
                            <input value="{{ $item->namabarang }}" required name="namabarang" type="text" class="form-control">
                </div>
                        <div class="mb-3">
                            <label for="">Kategori</label>
                            <select name="kategori" id="" class="form-control">                       
                                <option value="makanan" {{ ($item->kategori === 'Makanan') ?'select' : ''}}>Makanan</option>
                                <option value="nonmakanan" {{ ($item->kategori === 'NonMakanan') ?'select' : ''}}>NonMakanan</option>
                            </select>
                </div>
                        <div class="mb-3">
                            <label for="">Stok</label>
                            <input value="{{ $item->stok }}" required name="stok" type="number" class="form-control">
                </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input value="{{ $item->harga }}" required name="harga" type="number" class="form-control">
                </div>
                        <div class="mb-3">
                           <a class="btn btn-secondary" href="/item">Batal</a>
                           <button type="submit" class="btn btn-success">Update</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>  
@endsection