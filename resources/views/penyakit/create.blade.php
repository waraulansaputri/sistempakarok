@extends('layouts.master')

@section('title')
    Create Penyakit
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Penyakit</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Tambah Data Penyakit
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{route('penyakit.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                               <div class="form-group">
                                    <label>ID Penyakit</label>
                                    <input type="text" name="id_penyakit" class="form-control" required="" placeholder="Masukkan ID Penyakit">
                                </div>
                                <div class="form-group">
                                    <label>Nama Penyakit</label>
                                    <input type="text" name="nama_penyakit" class="form-control" required="" placeholder="Masukkan Nama Penyakit">
                                </div>

                                
                                <div class="form-group">
                                    <label>Solusi</label>
                                    <textarea name="solusi" class="form-control" rows="10" cols="50" required></textarea>
                                </div>

                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection