@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('kategori.update', $kategori->kategori_id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Kode Kategori</label>
                <input type="text" class="form-control" name="kategori_kode" value="{{ $kategori->kategori_kode }}" required>
            </div>

            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="kategori_nama" value="{{ $kategori->kategori_nama }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-default">Kembali</a>
        </form>
    </div>
</div>
@endsection
{{--@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Kategori</h3>
                    </div>

                    <form action="{{ route('kategori.update', $kategori->kategori_id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="form-group">
                                <label for="kodeKategori">Kode Kategori</label>
                                <input type="text" class="form-control" name="kodeKategori" id="kodeKategori" 
                                    value="{{ $kategori->kategori_kode }}">
                            </div>

                            <div class="form-group">
                                <label for="namaKategori">Nama Kategori</label>
                                <input type="text" class="form-control" name="namaKategori" id="namaKategori" 
                                    value="{{ $kategori->kategori_nama }}">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
