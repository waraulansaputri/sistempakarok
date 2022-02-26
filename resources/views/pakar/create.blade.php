@extends('layouts.master')

@section('title')
    Create Pakar
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Pakar</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Tambah Data Pakar
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{route('pakar.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>Nama Pakar</label>
                                    <input type="text" name="nama" class="form-control" required="" placeholder="Masukkan Nama Pakar">
                                </div>

                                <div class="form-group">
                                    <label>No HP (Wajib Format : 628xxxxxxxx)</label>
                                    <input type="text" name="no_hp" class="form-control" required="" placeholder="Masukkan No HP">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required="" placeholder="Masukkan Alamat">
                                </div>

                                

                                
                                <div class="form-group">
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control" required="" required>
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