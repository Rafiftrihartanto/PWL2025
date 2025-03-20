@extends('layout.app')

{{-- customize layout seection --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Create')

{{-- content body: main page content --}}

@section('content')
        <div class="container">
            <div class="card card-primary">
                <div class="card_header">
                <h3 class="card-title">Buat Kategori Baru</h3>
                </div>

                <form method="post" action="../kategori">
                    <form method="POST" action="{{ route('kategori.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kodeKategori">Kode Kategori</label>
                            <input type="text" class="form-control" id="kodeKategori" name="kodeKategori"  placeholder="Masukkan Kode Kategori" required>
                        </div>
                        <div class="form-group">
                            <label for="namaKategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="Masukkan Nama Kategori" required>
                        </div>
                    </div>
                  
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection